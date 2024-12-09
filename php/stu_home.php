<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <meta name="theme-color" content="#C00411" />
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/stu_home_styles.css" />
    <link rel="stylesheet" href="../css/scrollbar.css" />
    <link rel="stylesheet" href="../css/student_sidebar.css">
    <script src="../js/stu_home_script.js" defer></script>
</head>
<body>

<?php include 'config.php'; ?>

<div class="frame_1">
    <div class="d-flex">
        <?php include 'student_sidebar.php'; ?>

        <div class="main_body flex-grow-1">
            <nav class="navbar-main navbar">
                <div class="container-nav container-fluid">
                    <a class="navbar-brand" href="#">
                        <svg class="logo logo-light">
                            <use xlink:href="../SVG/Asset_1.svg#Layer_2"></use>
                        </svg>
                        <svg class="logo logo-dark">
                            <use xlink:href="../SVG/Asset 2.svg#Layer_2"></use>
                        </svg>
                    </a>

                    <form 
                    class="search-form d-flex search-container" 
                    role="search" 
                    id="searchForm">
                        <input 
                        class="search-bar form-control me-2" 
                        type="search" 
                        placeholder="Search" 
                        aria-label="Search"
                        id="searchInput" 
                        />
                            <button class="search-btn" type="submit">
                                <svg class="icon icon-search" fill="currentColor">
                                <use xlink:href="icons.svg#icon-search"></use>
                                </svg>
                            </button>
                    </form>
                </div>
            </nav>

            <section class="inventory-section">
                <div class="inventory-container">
                    <h4 class="inventory-text">Inventory</h4>
                    <button class="btn filter-btn" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M19 2H5C4.20435 2 3.44129 2.31607 2.87868 2.87868C2.31607 3.44129 2 4.20435 2 5V6.17C1.99986 6.58294 2.08497 6.99147 2.25 7.37V7.43C2.39128 7.75097 2.59139 8.04266 2.84 8.29L9 14.41V21C8.99966 21.1699 9.04264 21.3372 9.12487 21.4859C9.20711 21.6346 9.32589 21.7599 9.47 21.85C9.62914 21.9486 9.81277 22.0006 10 22C10.1565 21.9991 10.3107 21.9614 10.45 21.89L14.45 19.89C14.6149 19.8069 14.7536 19.6798 14.8507 19.5227C14.9478 19.3656 14.9994 19.1847 15 19V14.41L21.12 8.29C21.3686 8.04266 21.5687 7.75097 21.71 7.43V7.37C21.8888 6.99443 21.9876 6.58578 22 6.17V5C22 4.20435 21.6839 3.44129 21.1213 2.87868C20.5587 2.31607 19.7956 2 19 2ZM13.29 13.29C13.1973 13.3834 13.124 13.4943 13.0742 13.6161C13.0245 13.7379 12.9992 13.8684 13 14V18.38L11 19.38V14C11.0008 13.8684 10.9755 13.7379 10.9258 13.6161C10.876 13.4943 10.8027 13.3834 10.71 13.29L5.41 8H18.59L13.29 13.29ZM20 6H4V5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V6Z" />
                        </svg>
                        <span class="filter-text">Filter</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="filterDropdown"  data-bs-auto-close="outside">
                        <!-- Name Filter -->
                        <li>
                            <div class="filter-header">
                                <div class="filter-category">Name</div>
                                <button 
                                    class="clear-filters-btn" 
                                    title="Clear filters" 
                                    aria-label="Clear filters">
                                        <svg class="icon-reset" fill="currentColor">
                                            <use xlink:href="icons.svg#icon-filter-clear"></use>
                                        </svg>
                                </button>
                            </div>
                            <div class="form-check filter-text">
                                <input 
                                    class="form-check-input" 
                                    type="radio" 
                                    name="nameFilter" 
                                    id="filterNameAsc" 
                                    value="asc">
                                        <label class="form-check-label" for="filterNameAsc">Ascending</label>
                            </div>
                            <div class="form-check filter-text">
                                    <input 
                                    class="form-check-input" 
                                    type="radio" name="nameFilter" 
                                    id="filterNameDesc" 
                                    value="desc">
                                        <label class="form-check-label" for="filterNameDesc">Descending</label>
                            </div>
                        </li>
                        <hr class="filter-separator">
                        <!-- Quantity Filter -->
                        <li>
                            <div class="filter-header">
                                <div class="filter-category">Quantity</div>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="quantityFilter" id="filterLowStock" value="lowStock">
                                <label class="form-check-label" for="filterLowStock">Low Stock</label>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="quantityFilter" id="filterHighStock" value="highStock">
                                <label class="form-check-label" for="filterHighStock">High Stock</label>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="quantityFilter" id="filterOutOfStock" value="outOfStock">
                                <label class="form-check-label" for="filterOutOfStock">Out of Stock</label>
                            </div>
                        </li>
                        <hr class="filter-separator">
                        <!-- Property Filter -->
                        <li>
                            <div class="filter-header">
                                <div class="filter-category">Property</div>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="propertyFilter" id="filterConsumable" value="consumable">
                                <label class="form-check-label" for="filterConsumable">Consumable</label>
                            </div>
                            <div class="form-check filter-text">
                                <input class="form-check-input" type="radio" name="propertyFilter" id="filterNonConsumable" value="nonConsumable">
                                <label class="form-check-label" for="filterNonConsumable">Non-Consumable</label>
                            </div>
                        </li>
                    </ul>


                </div>
            </section>

            <section class="scrollable-section">
                <div>
                    <button
                        class="btn request-btn"
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#reviewItemsModal"
                        aria-label="Review Items"
                        >
                        <svg class="request-icon"
                        width="70" 
                        height="70" 
                        viewBox="0 0 70 70" 
                        fill="none" 
                        xmlns="http://www.w3.org/2000/svg">

                        <rect width="70" height="70" rx="20" fill="#C00411"/>
                        <path d="M17.6286 13.0202C17.8522 12.9828 18.0812 13.0006 18.2968 13.072C18.5124 13.1434 18.7084 13.2664 18.8686 13.4308L20.7143 15.3285L22.56 13.4308C22.6927 13.2943 22.8503 13.1859 23.0239 13.112C23.1975 13.0381 23.3835 13 23.5714 13C23.7593 13 23.9454 13.0381 24.119 13.112C24.2925 13.1859 24.4502 13.2943 24.5829 13.4308L26.4286 15.3285L28.2743 13.4308C28.407 13.2943 28.5646 13.1859 28.7382 13.112C28.9117 13.0381 29.0978 13 29.2857 13C29.4736 13 29.6597 13.0381 29.8332 13.112C30.0068 13.1859 30.1644 13.2943 30.2971 13.4308L32.1429 15.3285L33.9886 13.4308C34.1213 13.2943 34.2789 13.1859 34.4525 13.112C34.626 13.0381 34.8121 13 35 13C35.1879 13 35.374 13.0381 35.5475 13.112C35.7211 13.1859 35.8787 13.2943 36.0114 13.4308L37.8571 15.3285L39.7029 13.4308C39.8356 13.2943 39.9932 13.1859 40.1668 13.112C40.3403 13.0381 40.5264 13 40.7143 13C40.9022 13 41.0883 13.0381 41.2618 13.112C41.4354 13.1859 41.593 13.2943 41.7257 13.4308L43.5714 15.3285L45.4171 13.4308C45.5498 13.2943 45.7075 13.1859 45.881 13.112C46.0546 13.0381 46.2407 13 46.4286 13C46.6165 13 46.8025 13.0381 46.9761 13.112C47.1497 13.1859 47.3073 13.2943 47.44 13.4308L49.2857 15.3285L51.1314 13.4308C51.2915 13.2664 51.4874 13.1434 51.7028 13.0719C51.9183 13.0005 52.1473 12.9826 52.3708 13.0198C52.5944 13.0571 52.8061 13.1484 52.9885 13.2861C53.1709 13.4239 53.3188 13.6042 53.42 13.8121L54.8486 16.7451C54.9481 16.949 55 17.174 55 17.4021V52.5979C55 52.826 54.9481 53.051 54.8486 53.2549L53.42 56.1879C53.3187 56.3953 53.1709 56.5751 52.9887 56.7125C52.8065 56.8499 52.5952 56.9409 52.3721 56.9782C52.1489 57.0154 51.9204 56.9977 51.7052 56.9266C51.49 56.8555 51.2944 56.733 51.1343 56.5692L49.2857 54.6715L47.44 56.5692C47.3073 56.7057 47.1497 56.8141 46.9761 56.888C46.8025 56.9619 46.6165 57 46.4286 57C46.2407 57 46.0546 56.9619 45.881 56.888C45.7075 56.8141 45.5498 56.7057 45.4171 56.5692L43.5714 54.6715L41.7257 56.5692C41.593 56.7057 41.4354 56.8141 41.2618 56.888C41.0883 56.9619 40.9022 57 40.7143 57C40.5264 57 40.3403 56.9619 40.1668 56.888C39.9932 56.8141 39.8356 56.7057 39.7029 56.5692L37.8571 54.6715L36.0114 56.5692C35.8787 56.7057 35.7211 56.8141 35.5475 56.888C35.374 56.9619 35.1879 57 35 57C34.8121 57 34.626 56.9619 34.4525 56.888C34.2789 56.8141 34.1213 56.7057 33.9886 56.5692L32.1429 54.6715L30.2971 56.5692C30.1644 56.7057 30.0068 56.8141 29.8332 56.888C29.6597 56.9619 29.4736 57 29.2857 57C29.0978 57 28.9117 56.9619 28.7382 56.888C28.5646 56.8141 28.407 56.7057 28.2743 56.5692L26.4286 54.6715L24.5829 56.5692C24.4502 56.7057 24.2925 56.8141 24.119 56.888C23.9454 56.9619 23.7593 57 23.5714 57C23.3835 57 23.1975 56.9619 23.0239 56.888C22.8503 56.8141 22.6927 56.7057 22.56 56.5692L20.7143 54.6715L18.8686 56.5692C18.7085 56.7336 18.5126 56.8566 18.2972 56.9281C18.0817 56.9996 17.8527 57.0174 17.6292 56.9802C17.4056 56.9429 17.1939 56.8516 17.0115 56.7139C16.8291 56.5761 16.6812 56.3958 16.58 56.1879L15.1514 53.2549C15.0519 53.051 15 52.826 15 52.5979V17.4021C15 17.174 15.0519 16.949 15.1514 16.7451L16.58 13.8121C16.6812 13.6043 16.829 13.4241 17.0113 13.2864C17.1936 13.1488 17.4052 13.0575 17.6286 13.0202ZM18.2486 16.9446L17.8571 17.7482V52.2518L18.2486 53.0554L19.7057 51.5596C19.9736 51.2847 20.3369 51.1303 20.7157 51.1303C21.0945 51.1303 21.4578 51.2847 21.7257 51.5596L23.5714 53.4573L25.4171 51.5626C25.5498 51.426 25.7075 51.3176 25.881 51.2437C26.0546 51.1698 26.2407 51.1317 26.4286 51.1317C26.6165 51.1317 26.8025 51.1698 26.9761 51.2437C27.1497 51.3176 27.3073 51.426 27.44 51.5626L29.2857 53.4573L31.1314 51.5626C31.2641 51.426 31.4218 51.3176 31.5953 51.2437C31.7689 51.1698 31.955 51.1317 32.1429 51.1317C32.3308 51.1317 32.5168 51.1698 32.6904 51.2437C32.8639 51.3176 33.0216 51.426 33.1543 51.5626L35 53.4573L36.8457 51.5626C36.9784 51.426 37.1361 51.3176 37.3096 51.2437C37.4832 51.1698 37.6692 51.1317 37.8571 51.1317C38.045 51.1317 38.2311 51.1698 38.4047 51.2437C38.5782 51.3176 38.7359 51.426 38.8686 51.5626L40.7143 53.4573L42.56 51.5626C42.6927 51.426 42.8503 51.3176 43.0239 51.2437C43.1975 51.1698 43.3835 51.1317 43.5714 51.1317C43.7593 51.1317 43.9454 51.1698 44.119 51.2437C44.2925 51.3176 44.4502 51.426 44.5829 51.5626L46.4286 53.4573L48.2743 51.5626C48.407 51.426 48.5646 51.3176 48.7382 51.2437C48.9117 51.1698 49.0978 51.1317 49.2857 51.1317C49.4736 51.1317 49.6597 51.1698 49.8332 51.2437C50.0068 51.3176 50.1644 51.426 50.2971 51.5626L51.7514 53.0554L52.1429 52.2518V17.7482L51.7514 16.9446L50.2943 18.4404C50.0264 18.7153 49.6631 18.8697 49.2843 18.8697C48.9055 18.8697 48.5422 18.7153 48.2743 18.4404L46.4286 16.5427L44.5829 18.4404C44.4502 18.5769 44.2925 18.6853 44.119 18.7592C43.9454 18.8332 43.7593 18.8712 43.5714 18.8712C43.3835 18.8712 43.1975 18.8332 43.0239 18.7592C42.8503 18.6853 42.6927 18.5769 42.56 18.4404L40.7143 16.5427L38.8686 18.4404C38.7359 18.5769 38.5782 18.6853 38.4047 18.7592C38.2311 18.8332 38.045 18.8712 37.8571 18.8712C37.6692 18.8712 37.4832 18.8332 37.3096 18.7592C37.1361 18.6853 36.9784 18.5769 36.8457 18.4404L35 16.5427L33.1543 18.4404C33.0216 18.5769 32.8639 18.6853 32.6904 18.7592C32.5168 18.8332 32.3308 18.8712 32.1429 18.8712C31.955 18.8712 31.7689 18.8332 31.5953 18.7592C31.4218 18.6853 31.2641 18.5769 31.1314 18.4404L29.2857 16.5427L27.44 18.4404C27.3073 18.5769 27.1497 18.6853 26.9761 18.7592C26.8025 18.8332 26.6165 18.8712 26.4286 18.8712C26.2407 18.8712 26.0546 18.8332 25.881 18.7592C25.7075 18.6853 25.5498 18.5769 25.4171 18.4404L23.5714 16.5427L21.7257 18.4404C21.593 18.5769 21.4354 18.6853 21.2618 18.7592C21.0883 18.8332 20.9022 18.8712 20.7143 18.8712C20.5264 18.8712 20.3403 18.8332 20.1668 18.7592C19.9932 18.6853 19.8356 18.5769 19.7029 18.4404L18.2486 16.9446Z" fill="#F7F7F7"/>
                        <path d="M21 26.4286C21 26.0497 21.1475 25.6863 21.4101 25.4184C21.6726 25.1505 22.0287 25 22.4 25H39.2C39.5713 25 39.9274 25.1505 40.19 25.4184C40.4525 25.6863 40.6 26.0497 40.6 26.4286C40.6 26.8075 40.4525 27.1708 40.19 27.4387C39.9274 27.7066 39.5713 27.8571 39.2 27.8571H22.4C22.0287 27.8571 21.6726 27.7066 21.4101 27.4387C21.1475 27.1708 21 26.8075 21 26.4286ZM21 32.1429C21 31.764 21.1475 31.4006 21.4101 31.1327C21.6726 30.8648 22.0287 30.7143 22.4 30.7143H39.2C39.5713 30.7143 39.9274 30.8648 40.19 31.1327C40.4525 31.4006 40.6 31.764 40.6 32.1429C40.6 32.5217 40.4525 32.8851 40.19 33.153C39.9274 33.4209 39.5713 33.5714 39.2 33.5714H22.4C22.0287 33.5714 21.6726 33.4209 21.4101 33.153C21.1475 32.8851 21 32.5217 21 32.1429ZM21 37.8571C21 37.4783 21.1475 37.1149 21.4101 36.847C21.6726 36.5791 22.0287 36.4286 22.4 36.4286H39.2C39.5713 36.4286 39.9274 36.5791 40.19 36.847C40.4525 37.1149 40.6 37.4783 40.6 37.8571C40.6 38.236 40.4525 38.5994 40.19 38.8673C39.9274 39.1352 39.5713 39.2857 39.2 39.2857H22.4C22.0287 39.2857 21.6726 39.1352 21.4101 38.8673C21.1475 38.5994 21 38.236 21 37.8571ZM21 43.5714C21 43.1925 21.1475 42.8292 21.4101 42.5613C21.6726 42.2934 22.0287 42.1429 22.4 42.1429H39.2C39.5713 42.1429 39.9274 42.2934 40.19 42.5613C40.4525 42.8292 40.6 43.1925 40.6 43.5714C40.6 43.9503 40.4525 44.3137 40.19 44.5816C39.9274 44.8495 39.5713 45 39.2 45H22.4C22.0287 45 21.6726 44.8495 21.4101 44.5816C21.1475 44.3137 21 43.9503 21 43.5714ZM43.4 26.4286C43.4 26.0497 43.5475 25.6863 43.81 25.4184C44.0726 25.1505 44.4287 25 44.8 25H47.6C47.9713 25 48.3274 25.1505 48.59 25.4184C48.8525 25.6863 49 26.0497 49 26.4286C49 26.8075 48.8525 27.1708 48.59 27.4387C48.3274 27.7066 47.9713 27.8571 47.6 27.8571H44.8C44.4287 27.8571 44.0726 27.7066 43.81 27.4387C43.5475 27.1708 43.4 26.8075 43.4 26.4286ZM43.4 32.1429C43.4 31.764 43.5475 31.4006 43.81 31.1327C44.0726 30.8648 44.4287 30.7143 44.8 30.7143H47.6C47.9713 30.7143 48.3274 30.8648 48.59 31.1327C48.8525 31.4006 49 31.764 49 32.1429C49 32.5217 48.8525 32.8851 48.59 33.153C48.3274 33.4209 47.9713 33.5714 47.6 33.5714H44.8C44.4287 33.5714 44.0726 33.4209 43.81 33.153C43.5475 32.8851 43.4 32.5217 43.4 32.1429ZM43.4 37.8571C43.4 37.4783 43.5475 37.1149 43.81 36.847C44.0726 36.5791 44.4287 36.4286 44.8 36.4286H47.6C47.9713 36.4286 48.3274 36.5791 48.59 36.847C48.8525 37.1149 49 37.4783 49 37.8571C49 38.236 48.8525 38.5994 48.59 38.8673C48.3274 39.1352 47.9713 39.2857 47.6 39.2857H44.8C44.4287 39.2857 44.0726 39.1352 43.81 38.8673C43.5475 38.5994 43.4 38.236 43.4 37.8571ZM43.4 43.5714C43.4 43.1925 43.5475 42.8292 43.81 42.5613C44.0726 42.2934 44.4287 42.1429 44.8 42.1429H47.6C47.9713 42.1429 48.3274 42.2934 48.59 42.5613C48.8525 42.8292 49 43.1925 49 43.5714C49 43.9503 48.8525 44.3137 48.59 44.5816C48.3274 44.8495 47.9713 45 47.6 45H44.8C44.4287 45 44.0726 44.8495 43.81 44.5816C43.5475 44.3137 43.4 43.9503 43.4 43.5714Z" fill="#F7F7F7" fill-opacity="0.968627"/>
                        </svg>

                        <span>Process Request  </span>
                    </button>

                </div>
                <div class="card-container">
                        <link rel="stylesheet" href="../css/stu_home_styles.css" />
                        <?php include 'fetch_items_student.php'; ?>
            

                </div>
            </section>
        </div>
    </div>
</div>


<!-- Add to list Modal -->
<div
    class="modal fade"
    id="addToListModal"
    data-bs-backdrop="true"
    tabindex="-1"
    aria-labelledby="addToListModalLabel"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-centered modal-custom"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="addToListModalLabel">
                    Add To List
                </h2>
            </div>

            <div class="modal-body">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th scope="col">Item Name</th>
                            <th class="qt_col" scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Arduino Uno R3</td>
                            <td>
                                <div class="quantity-control d-flex align-items-center">
                                    <input
                                        type="number"
                                        id="quantity"
                                        class="form-control mx-2 text-center"
                                        value="1"
                                        min="1"
                                        style="width: 60px;"
                                    />

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" class="btn btn-suc-custom">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Process Modal -->
<div
    class="modal fade"
    id="reviewItemsModal"
    data-bs-backdrop="true"
    tabindex="-1"
    aria-labelledby="reviewItemsModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-custom review-modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="reviewItemsModalLabel">Review Items</h2>
                
            </div>

            <div class="modal-body">
                <!-- Step 1: Review Items -->
                <div class="step active" id="step-1">
                    <div class="table-container">
                        <div class="table-wrapper">
                            <table class="table table-custom review">
                                <thead>
                                    <tr>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="itemsTable">
                                    <tr>
                                        <td>Arduino Uno R3</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn delete-btn" title="Delete Item">
                                                <svg class="icon-delete-btn" fill="currentColor">
                                                    <use xlink:href="icons.svg#icon-delete-item"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ESP 32</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn delete-btn" title="Delete Item">
                                                <svg class="icon-delete-btn" fill="currentColor">
                                                    <use xlink:href="icons.svg#icon-delete-item"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Breadboard</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn delete-btn" title="Delete Item">
                                                <svg class="icon-delete-btn" fill="currentColor">
                                                    <use xlink:href="icons.svg#icon-delete-item"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Flame Sensor</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn delete-btn" title="Delete Item">
                                                <svg class="icon-delete-btn" fill="currentColor">
                                                    <use xlink:href="icons.svg#icon-delete-item"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>IR Sensor</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn delete-btn" title="Delete Item">
                                                <svg class="icon-delete-btn" fill="currentColor">
                                                    <use xlink:href="icons.svg#icon-delete-item"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>74LS08</td>
                                        <td>1</td>
                                        <td>
                                            <button class="btn delete-btn" title="Delete Item">
                                                <svg class="icon-delete-btn" fill="currentColor">
                                                    <use xlink:href="icons.svg#icon-delete-item"></use>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Request Form -->
                <div class="step" id="step-2">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="idInput" class="form-label">ID</label>
                                <input type="text" class="form-control" id="idInput" placeholder="#0000" disabled />
                            </div>
                            <div class="col-md-6">
                                <label for="returnDateInput" class="form-label">Return Date</label>
                                <input type="date" class="form-control" id="returnDateInput" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="courseDropdown" class="form-label">Course</label>
                            <input
                                type="text"
                                class="form-control"
                                id="courseDropdown"
                                placeholder="Search for a course"
                                autocomplete="off"
                            />
                            <ul class="dropdown-menu w-100 position-absolute" id="courseOptions">
                                <li><button class="dropdown-item" type="button">NCP3106: Software Design Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">NCP3102: Embedded Systems Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">NCP3103: Computer Networks and Security Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">NCP 2102: Logic Circuits and Design Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">NEC 1206: Fundamentals of Electronic Circuits Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">NCP 1201: PC Troubleshooting and Maintenance</button></li>
                                <li><button class="dropdown-item" type="button">NCP 2202: Computer Architecture and Organization Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">NCP 2205: Microprocessors Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">NCP 2207: Data and Digital Communications Laboratory</button></li>
                                <li><button class="dropdown-item" type="button">Others</button></li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <label for="purposeInput" class="form-label">Purpose</label>
                            <textarea
                                class="form-control"
                                id="purposeInput"
                                rows="3"
                                maxlength="120"
                                oninput="updateCharacterCount()"
                                placeholder="The purpose of the item request here..."
                            ></textarea>

                            <span id="charCount" class="char-counter">0/120</span>
                        </div>
                    </form>
                   
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="prevButton" onclick="changeStep(-1)">Back</button>
                <button type="button" class="btn btn-secondary" id="cancelButton" onclick="resetModal()">Cancel</button>
                <button type="button" class="btn btn-suc-custom" id="nextButton" onclick="changeStep(1)">Next</button>
                <button type="button" class="btn btn-suc-custom" id="submitButton" onclick="submitForm()">Submit</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

