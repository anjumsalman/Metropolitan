<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="page" class="hfeed site">

        <header id="mtr-masthead" role="banner">

            <div id="mtr-menu">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hamb.png">
            </div>
            <div id="mtr-actions">
                <span><img src="<?php echo get_template_directory_uri(); ?>/images/search.png"></span>
                <span><img id="open-sidebar" src="<?php echo get_template_directory_uri(); ?>/images/sidebar.png"></span>
            </div>
            <div id="mtr-logo">
                <object width="70px" height="30px" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                </object>
            </div>

        </header>