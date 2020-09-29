<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="display: flex; flex-direction: column">

<?php get_template_part('template-parts/header/header', get_theme_mod('layout_header', 'green')); ?>
<main>
