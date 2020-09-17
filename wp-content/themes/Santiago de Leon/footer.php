<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
					echo et_core_fix_unclosed_html_tags( et_core_esc_previously( et_get_footer_credits() ) );
					// phpcs:enable
				?>
                    </div>	<!-- .container -->
                    <div class="extra-footer-container">
                        <div class="santiago-de-leon-logo-container">
                            <img src="http://csleon.com/wp-content/uploads/2019/05/logo-horizontal.png" alt="" class="img-santiagodeleon-footer">
                        </div>
                        <div class="footer-text-center-container">
                            <p class="text-footer-center">Copyright ® 2019 Derechos Reservados <br> Desarrollado Por <img src="http://csleon.com/wp-content/uploads/2019/05/Analiticom-logo.png" alt="" class="img-analiticom"></p>
                        </div>
                        <div class="social-media-container">
                            
                        <div class="et_pb_column et_pb_column_4_4 et_pb_column_18    et_pb_css_mix_blend_mode_passthrough et-last-child">
                            <ul class="et_pb_module et_pb_social_media_follow et_pb_social_media_follow_0 clearfix et_pb_bg_layout_light ">
								<li class="et_pb_social_media_follow_network_0 et_pb_social_icon et_pb_social_network_link  et-social-twitter et_pb_social_media_follow_network_0"><a href="https://twitter.com/CSantiagoDeLeon?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="icon et_pb_with_border" title="Follow on Twitter" target="_blank"><span class="et_pb_social_media_follow_network_name" aria-hidden="true">Follow</span></a></li>
								<li class="et_pb_social_media_follow_network_1 et_pb_social_icon et_pb_social_network_link  et-social-instagram et_pb_social_media_follow_network_1"><a href="https://www.instagram.com/csantiagodeleon/?hl=es-la" class="icon et_pb_with_border" title="Follow on Instagram" target="_blank"><span class="et_pb_social_media_follow_network_name" aria-hidden="true">Follow</span></a></li>
								<li class="et_pb_social_media_follow_network_2 et_pb_social_icon et_pb_social_network_link  et-social-linkedin et_pb_social_media_follow_network_2"><a href="#" class="icon et_pb_with_border" title="Follow on LinkedIn" target="_blank"><span class="et_pb_social_media_follow_network_name" aria-hidden="true">Follow</span></a></li>
								<li class="et_pb_social_media_follow_network_3 et_pb_social_icon et_pb_social_network_link  et-social-facebook et_pb_social_media_follow_network_3"><a href="https://es-la.facebook.com/Csantiagodeleon/" class="icon et_pb_with_border" title="Follow on Facebook" target="_blank"><span class="et_pb_social_media_follow_network_name" aria-hidden="true">Follow</span></a></li>
                            </ul> <!-- .et_pb_counters -->
			            </div>
                            <a href="#" class="social-media-text"><p class="social-media-text">Términos y Condiciones <br> Politicas de Privacidad</p></a>
                        </div>
                    </div>
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
	
</body>
</html>
