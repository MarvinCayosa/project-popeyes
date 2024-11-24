<?php
$current_page = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>


<div
    class="sidebar_custom sidebar d-flex flex-column flex-shrink-0 p-3 fixed-top"
    style="width: 110px; height: 100vh"
>
    <!--User Icon Dropdown-->
    <a
        href="#"
        class="user_profile m-2 d-flex justify-content-center text-white text-decoration-none"
        role="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
    >
        <span class="icon_name">Marvin Cayosa</span>
        <span class="icon_name identifier">Administrator</span>
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="avatar bi bi-person-circle"
            fill="currentColor"
            viewBox="0 0 16 16"
        >
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path
                fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
            />
        </svg>
    </a>
    <ul class="user_dropdown dropdown-menu">
        <li><a class="dropdown-item" href="../php/view_profile.php">View Profile</a></li>
        <li><a class="dropdown-item" href="../index.php">Log Out</a></li>
    </ul>

    <hr />
    <!--Navigation Icons-->
    <ul class="nav nav-pills flex-column d-flex align-items-center">
        <li class="nav-item nav-link d-flex justify-content-center icon-container <?= $current_page == 'home.php' ? 'active' : '' ?>">
            <a href="home.php">
                <svg class="icon" fill="currentColor">
                    <use xlink:href="icons.svg#icon-home"></use>
                </svg>
            </a>
            <span class="icon_name">Home</span>
        </li>
        <li class="nav-item nav-link d-flex justify-content-center icon-container <?= $current_page == 'inbox.php' ? 'active' : '' ?>">
            <a href="inbox.php">
                <svg class="icon" fill="currentColor">
                    <use xlink:href="icons.svg#icon-inbox"></use>
                </svg>
            </a>
            <span
                class="position-absolute translate-middle badge rounded-pill bg-danger"
            >10</span>
            <span class="icon_name">Inbox</span>
        </li>
        <li class="nav-item nav-link d-flex justify-content-center icon-container <?= $current_page == 'records.php' ? 'active' : '' ?>">
            <a href="records.php">
                <svg class="icon" fill="currentColor">
                    <use xlink:href="icons.svg#icon-profile"></use>
                </svg>
            </a>
            <span class="icon_name">Records</span>
        </li>
        <li class="nav-item nav-link d-flex justify-content-center icon-container <?= $current_page == 'archives.php' ? 'active' : '' ?>">
            <span class="icon_name">Archive</span>
            <a href="archives.php">
                <svg class="icon" fill="currentColor">
                    <use xlink:href="icons.svg#icon-archive"></use>
                </svg>
            </a>
        </li>
        <!-- Expand/Collapse Button -->
        <li class="nav-item d-flex justify-content-center icon-container">
            <button class="btn" id="toggleSidebar">
                <svg class="icon" fill="currentColor">
                    <use
                        xlink:href="icons.svg#icon-right"
                        id="sidebarToggleIcon"
                    ></use>
                </svg>
            </button>
        </li>
    </ul>

    <hr />

    <!--Options Icon-->
    <a
        href="#"
        class="options m-2 d-flex justify-content-center text-white text-decoration-none"
        aria-expanded="false"
    >
        <span class="icon_name">Options</span>
        <svg class="icon" fill="currentColor">
            <use xlink:href="icons.svg#icon-menu"></use>
        </svg>
    </a>
</div>
