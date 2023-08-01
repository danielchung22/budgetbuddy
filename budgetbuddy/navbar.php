
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- Logo and Name at the Top of Page -->
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="dashboard.php" target="">
        <img src="image/budgetbuddy(1).png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">BudgetBuddy</span>
    </a>
</div>

<hr class="horizontal light mt-0 mb-2">

<!-- The Buttons of the NavBar -->
<div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav top">
        <!-- Define your link information in an array -->
        <script>
            const currentPage = window.location.pathname.split('/').pop();

            const links = [
                {
                    id: 'dashboard-link',
                    href: 'dashboard.php',
                    icon: 'bx bxs-dashboard',
                    text: 'Dashboard',
                },
                {
                    id: 'upload-link',
                    href: 'entry.php',
                    icon: 'bx bx-table',
                    text: 'Data Entry',
                },
                // Add more links here if needed
            ];

            // Loop through the links array and generate the HTML code
            for (const link of links) {
                const isActive = link.href === currentPage;
                document.write(`
                    <li class="nav-item">
                        <a id="${link.id}" class="nav-link text-white ${isActive ? 'active' : ''}" href="${link.href}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="${link.icon}"></i>
                            </div>
                            <span class="nav-link-text ms-1">${link.text}</span>
                        </a>
                    </li>
                `);
            }
        </script>

    </ul>

    <ul class="navbar-nav">
        <li class="nav-item mt-3">
                    <h5 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8 mb-3">Account</h5>
                </li>
                <?php
                    // Check if the session variable 'user_name' exists
                    if (isset($_SESSION['user_name'])) {
                        $user_name = $_SESSION['user_name'];
                        // Display the welcome message with the user's name
                        echo "<li class='nav-item'>
                                <h6 class='welcometext'>Welcome and Slay, <br>
                                <span>$user_name</span></h6> 
                            </li>";
                    }
                ?>

                <li class="nav-item">
                    <a class="nav-link text-white" href="signin.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class='bx bx-user' ></i>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </a>
        </li>
    </ul>
</div>