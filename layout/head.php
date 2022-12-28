<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/nice-select.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/swiper.min.css">
<link rel="stylesheet" href="assets/css/font.css">
<link rel="stylesheet" href="assets/css/main-style.css">

<link rel="stylesheet" id="color-change" type="text/css" href="#">

<link rel="shortcut icon" type="image/ico" href="assets/images/main/logo.png" />
<title> EastMarket </title>

<?php 
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Text to send if user hits Cancel button';
        exit;
    } else {
        if($_SERVER['PHP_AUTH_USER'] == 'retarbd' && $_SERVER['PHP_AUTH_PW'] == 'retarbd'){
            // echo 'Authenticated';
        }
        else{
            exit;
        }
    }
?>