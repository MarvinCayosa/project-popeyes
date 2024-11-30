<?php   
  include '../php/config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $full_name = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $student_number = htmlspecialchars($_POST['studentNumber']);
    $password = htmlspecialchars($_POST['password']);


    // Target where to save the profile image
    $target_dir = "../assets/profile_images/";
    
    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);  // Creates the directory if it doesn't exist
    }

    $imageValidationResult = validateImage($_FILES["profilePicture"], $target_dir);

    $is_image_uploaded = false;
    if ($imageValidationResult !== true) {
      // Profile image input is invalid
      echo $imageValidationResult . "<br>";
    } else {
      // Profile image is valid
      // Move the uploaded file to the target directory
      //Append the current date and time to the image upload to make its name unique
      $timestamp = date("Y-m-d_H-i-s");
      $imageFileName = $timestamp . "_" . basename($_FILES["profilePicture"]["name"]);
      $target_file = $target_dir . $imageFileName;

      $target_file = $target_dir . basename($_FILES["profilePicture"]["name"]);
      if (move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_file)) {
        
        echo "The file " . basename($_FILES["profilePicture"]["name"]) . " has been uploaded.<br>";
        $is_image_uploaded = true;
    
      } else {
          echo "Sorry, there was an error uploading your file.<br>";
      }

      if($is_image_uploaded == true){
        // Save data to database 
        registerAccount($conn, $student_number, $full_name, $email, $password, $target_file);
      }

      echo "<script>
        alert('Account successfully created!');
        // After alert is shown, redirect the user
      </script>";

      header("Location: ../php/stu_home.php");

      exit();

    }
  }

  function validateImage($file, $target_dir) {
    $uploadOk = 1;
    $timestamp = date("Y-m-d_H-i-s");
    $imageFileName = "";
    $target_file = "";

    // Check if a file is uploaded
    if ($file["size"] > 0) {
        $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
        $imageFileName = $timestamp . "_" . basename($file["name"]);
        $target_file = $target_dir . $imageFileName;

        // Check if file is an image
        $check = getimagesize($file["tmp_name"]);
        if ($check === false) {
            return "File is not an image.";
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            return "Sorry, file already exists.";
        }

        // Check file size (limit to 20MB)
        if ($file["size"] > 20000000) {
            return "Sorry, your file is too large.";
        }

        // Allow certain file formats
        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
            return "Sorry, only JPG, JPEG & PNG files are allowed.";
        }
    } else {
        // No file uploaded, proceed without validating the file
        return true;
    }

    // If all validations pass, return true
    return true;
}


  function registerAccount($conn, $student_number, $full_name, $email, $password, $target_file) {
    $role = "student";

    // Prepare the SQL query
    $stmt = $conn->prepare("INSERT INTO accounts (name, email, password, picture, role, account_id) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Bind parameters, ensuring the correct types: 'ssssss' for string values
    $stmt->bind_param("ssssss", $full_name, $email, $password, $target_file, $role, $student_number); 
    
    // Execute the statement and check for success
    if ($stmt->execute()) {
      echo "User data saved successfully.<br>";
    } else {
      echo "Error: " . $stmt->error . "<br>";
    }

    // Close the prepared statement
    $stmt->close();
  }
?>