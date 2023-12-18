<?php
/**
 * Created by PhpStorm
 * User: Kha Nam (Andrew Nguyen)
 * Date: 29/05/2023
 * Time: 23:15
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="<?php asset('images/favicon.png'); ?>">
    <title><?php echo get_bloginfo(); ?></title>
    <link rel="stylesheet" href="<?php asset('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="<?php asset('css/style.css'); ?>?date=<?=date('YmdGis');?>" >
    <link rel="stylesheet" type="text/css" href="<?php asset('css/responsive.css'); ?>?date=<?=date('YmdGis');?>">
</head>
<body>
<header id="header" >
    <div class="container pc">
        <div class="logo">
            <a href="<?php echo home_url(); ?>" class="d-block">
                <img src="<?php asset('images/logo.png'); ?>" alt="">
            </a>
        </div>
        <div class="right">
            <nav id="nav-header" class="nav-desk">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-nav',
                    'container' => 'ul',
                    'container_class' => '',
                    'menu_class' => 'box-header menu-header'
                ));
                ?>
            </nav>
            <div class="logo-text">
                <img src="<?php asset('images/logo_text.png'); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="container mob">
        <div class="logo">
            <a href="<?php echo home_url(); ?>" class="d-block">
                <img src="<?php asset('images/logo0208@2x.png'); ?>" alt="">
            </a>
        </div>
        <div class="right">

            <div class="logo-text">
                <i class="fa fa-bars icon-open-menu-mobile" aria-hidden="true"></i>
            </div>
        </div>
        <nav id="nav-header" class="nav-desk">
            <i class="fa text-white fa-times icon-close-menu-mobile" aria-hidden="true"></i>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-nav',
                'container' => 'ul',
                'container_class' => '',
                'menu_class' => 'box-header menu-header'
            ));
            ?>
        </nav>

    </div>


</header>



