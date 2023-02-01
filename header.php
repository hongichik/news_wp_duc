<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <meta name="author" content=" " />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
    if (is_home()) {
        echo '<title>';
        bloginfo('name');
        echo ' - ';
        bloginfo('description');
        echo '</title>';
    } else {
        echo '<title>';
        wp_title('');
        echo ' - ';
        bloginfo('name');
        echo ' - ';
        bloginfo('description');
        echo '</title>';
    }
    ?>

	<script type='text/javascript' src="<?php bloginfo('template_url'); ?>/main.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/responsive.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>

<body>

    <div id="wrap">
        <div id="header">
            <a href="<?php bloginfo('url'); ?>"><img style="    max-width: 100%;
																height: 100%;
																object-fit: cover;"
                    src="<?php bloginfo('template_url'); ?>/images/logo3.jpg"></a>
        </div>

        <div id="navigation">
            <ul>
                <li class="<?php echo $highlight; ?>"><a href="<?php echo get_settings('home'); ?>"><?php _e('Home', 'wp_multiflex'); ?></a></li>
            </ul>
        </div>
        <!-- <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Header','wp_multiflex')) ) : else : ?> -->

        <!-- <div id="masthead">
            <div class="left-masthead">
                <a class="site-logo" href="<?php echo get_settings('home'); ?>"></a>
                <h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
                <p class="description"><?php bloginfo('description'); ?></p>
            </div>
            <div class="right-masthead">
                <a class="rss-logo" href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('RSS Feed', 'wp_multiflex'); ?>"></a>
            </div>
        </div>

        <div id="header">
            <div id="textbox">
                <?php include TEMPLATEPATH . '/header-text.php'; ?>
            </div>
        </div>

        <?php if (is_page()) {
            $highlight = 'page_item';
        } else {
            $highlight = 'page_item current_page_item';
        } ?>
        <div id="navigation">
            <ul>
                <li class="<?php echo $highlight; ?>"><a href="<?php echo get_settings('home'); ?>"><?php _e('Home', 'wp_multiflex'); ?></a></li>
                <?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
            </ul>
        </div> -->

        <!-- <?php endif; ?> -->

        <!-- <div id="crumb-search">
            <div id="breadcrumb">
                <?php if (function_exists('breadcrumb')) {
                    breadcrumb('link_all=true&home_always=true&sep=');
                } ?>
            </div>
            <div id="searchbar">
                <?php include TEMPLATEPATH . '/searchform.php'; ?>
            </div>
        </div> -->

        <div id="container">
