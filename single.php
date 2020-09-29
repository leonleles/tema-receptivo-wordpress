<?php

get_header();


the_post();
the_content();
if (is_active_sidebar('conteudo-blue')) :
    dynamic_sidebar('conteudo-blue');
endif;
get_footer();
