<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

        </div><!-- .inner-wrap -->
    </div><!-- #main -->
    <?php do_action( 'spacious_before_footer' ); ?>

    <?php
    $spacious_footer_design = spacious_options( 'spacious_footer_design', 'style_one' );
    $footer_class           = '';
    if ( $spacious_footer_design === 'style_two' ) {
        $footer_class = 'spacious-footer-style-two';
    }
    ?>
    <footer id="colophon" class="clearfix <?php echo esc_attr( $footer_class ); ?>">
        <?php get_sidebar( 'footer' );?>
		
        <div class="footer-socket-wrapper clearfix">
            <div class="inner-wrap">
                <div class="footer-socket-area">
                    <?php echo "Copyright © 2018 Aula Móvil UTPL."; ?>
                    <nav class="small-menu clearfix">
                        <?php						
                       
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <a href="#masthead" id="scroll-up"></a>
</div><!-- #page -->
<?php wp_footer();  ?>

</body>
</html>
