<?php
/**
 * Displays the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="author" content="L'armée de Dumbledore">

    <!-- IE META -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- END IE META -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO META -->
    <meta name="robots" content="index, follow">
    <meta name="description" content="Site de campagne pour Dumbledore">
    <!-- END SEO META -->

    <!-- APPLE META -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Dumbledore2017">
    <!-- END APPLE META -->

    <!-- MOBILE META -->
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <!-- END MOBILE META -->

    <!-- FACEBOOK META -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="Dumbledore2017">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Dumbledore2017">
    <meta property="og:description" content="Site de campagne pour Dumbledore">
    <!-- END FACEBOOK META -->

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:image" content="">
    <!-- END TWITTER META -->

    <link rel="shortcut icon" href="<?php echo THEMEDIR ?>/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo THEMEDIR ?>/apple-touch-icon.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="PrimaryHeader">
        <nav class="PrimaryHeader__wrapper primary-navigation">
              <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo( 'template_url' )?>/assets/images/logo-dumby.svg" alt="logo" class="PrimaryHeader__wrap__navbar__logo" /></a>
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'HeaderMenu' ) ); ?>
        </nav>
    </header>

    <section class="site-content">
        <div class="container">
