<!DOCTYPE html>
<!--
Template Name: Catering HTML Template 
Version: 1.0.0
Author: Kamleshyadav
Website: https://www.pixelnx.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->


<!-- Mirrored from kamleshyadav.com/html/catering/catering/main/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2022 10:20:24 GMT -->
<head>
    <?php 
        include('layout/head.php');
        include('php/connection.php');
    ?>
</head>

<body>
    <!-- Preloader Start -->
    <div class="cat-preloader">
        <div class="cat-preloader-inner">
            <img src="assets/images/main/loader.gif" alt="loader">
        </div>
    </div>

    <!-- Search Box -->
    <div class="search-box">
        <div class="search-box-container">
            <a href="javascript:void(0);" class="close-btn">
                <svg viewBox="0 0 413.348 413.348" xmlns="http://www.w3.org/2000/svg"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"/></svg>
            </a>
            <div class="search-bar-inner">
                <input type="text" placeholder="Search here..." />
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>

    <!-- Header Start -->
    <?php 
        include('layout/header.php');
    ?>

    <div class="cat-main-wrapper">

        <!-- Page Title Section -->
        <section class="cat-page-title-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cat-page-title">
                            <h1>Menus</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    Menus
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menus -->
        <section class="cat-menu-wrapper cat-section-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cat-menu-item-section">

                            <div class="cat-menu-wrapper cat-nav-tabs">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-tabA-tab" data-bs-toggle="pill" data-bs-target="#pills-tabA" type="button" role="tab" aria-controls="pills-tabA" aria-selected="true">Korean</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-tabB-tab" data-bs-toggle="pill" data-bs-target="#pills-tabB" type="button" role="tab" aria-controls="pills-tabB" aria-selected="false">Thai </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-tabC-tab" data-bs-toggle="pill" data-bs-target="#pills-tabC" type="button" role="tab" aria-controls="pills-tabC" aria-selected="false">Chinese</button>
                                    </li>
                                </ul>
                                <?php 
                                    $sql = "SELECT * FROM categories order by id asc";
                                    $result = $conn->query($sql);
                                    $cat1 = []; $cat2 = []; $cat3 = [];
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            if($row['type'] == 1){
                                                $cat1[] = $row;
                                            }
                                            else if($row['type'] == 2){
                                                $cat2[] = $row;
                                            }
                                            if($row['type'] == 3){
                                                $cat3[] = $row;
                                            }
                                        }
                                    }

                                    $foods = [];
                                    $sql2 = "SELECT * FROM food_items";
                                    $data = $conn->query($sql2);
                                    if($data->num_rows > 0) {
                                        while($row = $data->fetch_assoc()) {
                                            $foods[] = $row;
                                        }
                                    }
                                
                                                
                                            
                                    
                                ?>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-tabA" role="tabpanel" aria-labelledby="pills-tabA-tab">
                                        <div class="cat-menu-holder">
                                            <div class="row">
                                                


                                                <div class="cat-menu-wrapper cat-nav-tabs">
                                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                        <?php
                                                            $i=0;
                                                            $j=0;
                                                            foreach($cat1 as $cat){
                                                                $i++;
                                                        ?>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link <?php if($i ==1) echo 'active'; ?>" id="pills-tabA<?php echo $cat['id'] ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-tabA<?php echo $cat['id'] ?>" type="button" role="tab" aria-controls="pills-tabA<?php echo $cat['id'] ?>" aria-selected="true"><?php echo $cat['category']; ?></button>
                                                        </li>
                                                        <?php }?>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <?php 
                                                            foreach($cat1 as $cat){
                                                                $j++;
                                                        ?>
                                                        <div class="tab-pane fade <?php if($j ==1) echo 'show active'; ?>" id="pills-tabA<?php echo $cat['id'] ?>" role="tabpanel" aria-labelledby="pills-tabA<?php echo $cat['id'] ?>-tab">
                                                            <div class="cat-menu-holder">
                                                                <div class="row">
                                                                    <?php
                                                                        foreach($foods as $food){
                                                                            if($food['category_id'] == $cat['id']){
                                                                    ?>
                                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                        <div class="cat-pricing-list" style="border-bottom: 1px solid rgb(0 0 0 / 12%) !important; margin-bottom: 20px !important;">
                                                                            <!-- <span class="cat-pri-icon">
                                                                                <img src="../assets/images/main/menu/main-course/01.png" alt="">
                                                                            </span> -->
                                                                            <div class="cat-price-info">
                                                                                <div class="cat-pricing-title">
                                                                                    <h4><?php echo $food['title']; ?></h4>
                                                                                    <span class="cat-price"><?php echo $food['price']; ?>/=</span>
                                                                                </div>
                                                                                <p>
                                                                                    
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php }}?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="tab-pane fade" id="pills-tabB" role="tabpanel" aria-labelledby="pills-tabB-tab">
                                        <div class="cat-menu-holder">
                                            <div class="row">
                                                


                                                <div class="cat-menu-wrapper cat-nav-tabs">
                                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                        <?php
                                                            $i=0;
                                                            $j=0;
                                                            foreach($cat2 as $cat){
                                                                $i++;
                                                        ?>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link <?php if($i ==1) echo 'active'; ?>" id="pills-tabB<?php echo $cat['id'] ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-tabB<?php echo $cat['id'] ?>" type="button" role="tab" aria-controls="pills-tabB<?php echo $cat['id'] ?>" aria-selected="true"><?php echo $cat['category']; ?></button>
                                                        </li>
                                                        <?php }?>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <?php 
                                                            foreach($cat2 as $cat){
                                                                $j++;
                                                        ?>
                                                        <div class="tab-pane fade <?php if($j ==1) echo 'show active'; ?>" id="pills-tabB<?php echo $cat['id'] ?>" role="tabpanel" aria-labelledby="pills-tabB<?php echo $cat['id'] ?>-tab">
                                                            <div class="cat-menu-holder">
                                                                <div class="row">
                                                                    <?php
                                                                        foreach($foods as $food){
                                                                            if($food['category_id'] == $cat['id']){
                                                                    ?>
                                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                        <div class="cat-pricing-list" style="border-bottom: 1px solid rgb(0 0 0 / 12%) !important; margin-bottom: 20px !important;">
                                                                            <!-- <span class="cat-pri-icon">
                                                                                <img src="../assets/images/main/menu/main-course/01.png" alt="">
                                                                            </span> -->
                                                                            <div class="cat-price-info">
                                                                                <div class="cat-pricing-title">
                                                                                    <h4><?php echo $food['title']; ?></h4>
                                                                                    <span class="cat-price"><?php echo $food['price']; ?>/=</span>
                                                                                </div>
                                                                                <p>
                                                                                    
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php }}?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="pills-tabC" role="tabpanel" aria-labelledby="pills-tabC-tab">
                                        <div class="cat-menu-holder">
                                            <div class="row">
                                                


                                                <div class="cat-menu-wrapper cat-nav-tabs">
                                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                        <?php
                                                            $i=0;
                                                            $j=0;
                                                            foreach($cat3 as $cat){
                                                                $i++;
                                                        ?>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link <?php if($i ==1) echo 'active'; ?>" id="pills-tabC<?php echo $cat['id'] ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-tabC<?php echo $cat['id'] ?>" type="button" role="tab" aria-controls="pills-tabC<?php echo $cat['id'] ?>" aria-selected="true"><?php echo $cat['category'] ?></button>
                                                        </li>
                                                        <?php }?>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <?php 
                                                            foreach($cat3 as $cat){
                                                                $j++;
                                                        ?>
                                                        <div class="tab-pane fade <?php if($j ==1) echo 'show active'; ?>" id="pills-tabC<?php echo $cat['id'] ?>" role="tabpanel" aria-labelledby="pills-tabC<?php echo $cat['id'] ?>-tab">
                                                            <div class="cat-menu-holder">
                                                                <div class="row">
                                                                    <?php
                                                                        foreach($foods as $food){
                                                                            if($food['category_id'] == $cat['id']){
                                                                    ?>
                                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                        <div class="cat-pricing-list" style="border-bottom: 1px solid rgb(0 0 0 / 12%) !important; margin-bottom: 20px !important;">
                                                                            <!-- <span class="cat-pri-icon">
                                                                                <img src="../assets/images/main/menu/main-course/01.png" alt="">
                                                                            </span> -->
                                                                            <div class="cat-price-info">
                                                                                <div class="cat-pricing-title">
                                                                                    <h4><?php echo $food['title']; ?></h4>
                                                                                    <span class="cat-price"><?php echo $food['price']; ?>/=</span>
                                                                                </div>
                                                                                <p>
                                                                                    
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php }}?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php }?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php 
        include('layout/footer.php');
    ?>


    <!-- GO To Top -->
    <a href="javascript:void(0);" class="scroll-to-topp"><span class="fa fa-angle-up"></span></a>


    <!-- Script Start -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/main-custom.js"></script>
</body>


<!-- Mirrored from kamleshyadav.com/html/catering/catering/main/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2022 10:20:25 GMT -->
</html>