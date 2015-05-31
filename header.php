<!doctype html>
<html>
    <head>
        
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
        <script src="<?php bloginfo('template_directory'); ?>/js/matchMedia.js" ></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/matchMedia.addListener.js" ></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/response.js"></script>
       
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php do_action('wp_head'); ?>
    </head>