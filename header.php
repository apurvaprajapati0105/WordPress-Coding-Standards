<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- Your header content here -->
        <?php
            // Inside your header.php or any other appropriate location where you want to display the menu
            wp_nav_menu(
                array(
                    'theme_location' => 'primary', // Use the same location name as registered in functions.php
                    'menu_id' => 'primary-menu',   // Optional: Adds an ID to the menu container
                    // Add more parameters as needed, such as 'menu_class' for styling
                )
            );
        ?>

    </header>
