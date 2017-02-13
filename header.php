<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Greg Rowe Blank Template</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>

    <div class="container"><!-- Begin Container Div-->
<header class="row">
    <div class="twelve columns">
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?><h2>
    </div>
</header>

<!-- Add Menu Here -->
<div class="row">
    <div class="twelve columns">
        <?php wp_nav_menu(array(
            'sort_column' => 'menu_order',
            'container_class' => 'blank-menu-header'
            ));?>
    </div>
</div>
