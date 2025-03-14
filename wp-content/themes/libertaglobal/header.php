<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= get_template_directory_uri() ?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileImage" content="<?= get_template_directory_uri() ?>/assets/favicon/ms-icon-144x144.png">

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/default-theme.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/assets/css/locomotive-scroll.css">
    <style>.start-hidden {opacity: 0}</style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preload" as="image" href="http://br752.teste.website/~inove860/libertaglobal/wp-content/webp-express/webp-images/uploads/2025/03/banner-educacao-financeira.jpg.webp">
    <link rel="preload" as="image" href="http://br752.teste.website/~inove860/libertaglobal/wp-content/webp-express/webp-images/uploads/2025/03/banner-mobile.jpg.webp">

</head>
<body>

<header>
    <div class="header wow fade start-hidden">
        <div class="container">
            <div class="menu-open"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M 2 5 L 2 7 L 22 7 L 22 5 L 2 5 z M 2 11 L 2 13 L 22 13 L 22 11 L 2 11 z M 2 17 L 2 19 L 22 19 L 22 17 L 2 17 z"></path></svg></div>
            <a href="<?= esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo get_field('logo_header', 'option'); ?>" alt="<?php the_title(); ?>"></a>
            <?php
                wp_nav_menu(array(
                    'menu'          => 2,
                    'container'      => 'nav',
                    'container_class' => 'menu-header',
                    'menu_class'     => 'menu-list',
                ));
            ?>
        </div>
    </div>
</header>