<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newsite
 */

?>


<?php
    /**
     * Adds a container over the whole page, so restricts the width.
     * Turn off in Theme Settings so we can add full-width stripes.
     */

    if( get_field('stripe', 'options') ){
        echo '</div>
                </main>
                    </div>
                        </div>
                            </div>
                                </div>';
    }else{
        
        
        echo '</main>';
    };?>










<footer id="colophon" class="site-footer">

    <?php gridwrapper( array('open') );?>
        <div class="uk-flex uk-flex-middle uk-width-1-1@m footer--wrapper">

            <div class="uk-width-1-2@m uk-flex-last">
                <?php get_template_part('support/partials/social') ;?>
            </div>

            <div class="uk-width-1-2@m">
                <?php get_template_part('support/partials/copyright') ;?>
            </div>

        </div>
    <?php gridwrapper( array('close') );?>

</footer><!-- #colophon -->

<?php wp_footer(); ?>

<script>$(document).ready(function(){ $('body').addClass('loaded').removeClass('hidden'); });</script>




</body>
</html>