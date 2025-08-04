<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php
    // This outputs the admin bar HTML
    if (is_user_logged_in()) {
        wp_admin_bar_render();
    }
    ?>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
            </ul>
        </nav>
    </header>