<header>
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-4">
                    <div class="cat-logo-wrapper">
                        <a href="index.php">
                            <img src="assets/images/main/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-9 col-sm-8 col-8">
                    <div class="main-menu-container">
                        <!-- Header Menus -->
                        <div class="main-menu">
                            <ul>
                                <li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'index.php') || is_null($_SERVER['REQUEST_URI'])) echo 'active'; ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'menu.php')) echo 'active'; ?>">
                                    <a href="menu.php">Menu</a>
                                </li>
                                <li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'event.php')) echo 'active'; ?>"><a href="event.php">Events</a></li>
                                <li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'about.php')) echo 'active'; ?>"><a href="about.php">About Us</a></li>
                                <li class="<?php if(strpos($_SERVER['REQUEST_URI'], 'contact.php')) echo 'active'; ?>"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>