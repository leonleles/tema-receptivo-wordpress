<?php

get_header();

if (is_active_sidebar('conteudo-single')) :
    dynamic_sidebar('conteudo-single');
endif;
the_post();
the_content();

get_footer();
