<?php

get_header();

echo "<a href='http://localhost/wordpress2/2020/08/14/ola-mundo/'>ola mundo</a>";
get_template_part('template-parts/front-page/front-page', get_theme_mod('layout_front', 'green'));

get_footer();
