<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Blog</title>
</head>

<body <?php body_class(); ?>>
    <header class="sticky-top">
        <div class="site-branding">My blog</div>
        <div class="container">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'container_class' => 'custom-menu-class',
                )
            )
            ?>
        </div>
    </header>