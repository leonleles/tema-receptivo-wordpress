</main>
<footer>
    footer

    <?php if( !nucleoweb_get_option( 'disable_footer_widget' ) ):

        if( nucleoweb_is_active_footer_sidebar() ):
            ?>
            <div class="footer-widget-wrap">
                <div class="row">
                    <?php
                    $count = 0;
                    for( $i = 1; $i <= 4; $i++ ){
                        ?>
                        <?php if ( is_active_sidebar( 'travelbiz-footer-sidebar-'.$i ) ) : ?>
                            <div class="col-lg-3 col-md-6 col-12 footer-widget-item">
                                <?php dynamic_sidebar( 'travelbiz-footer-sidebar-'.$i ); ?>
                            </div>
                        <?php endif; ?>
                        <?php
                    }
                    if( $count > 0 ){
                        $return = true;
                    }else{
                        $return = false;
                    }
                    ?>
                </div>
            </div>
        <?php
        endif;
    endif
    ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
