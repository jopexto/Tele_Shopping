<?php
/**
 * The template for displaying the footer.
 *
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */


$back_to_top_class = mfn_opts_get('back-top-top');

if( $back_to_top_class == 'hide' ){
	$back_to_top_position = false;
} elseif( strpos( $back_to_top_class, 'sticky' ) !== false ){
	$back_to_top_position = 'body';
} elseif( mfn_opts_get('footer-hide') == 1 ){
	$back_to_top_position = 'footer';
} else {
	$back_to_top_position = 'copyright';
}

?>

<?php do_action( 'mfn_hook_content_after' ); ?>

<?php if( 'hide' != mfn_opts_get( 'footer-style' ) ): ?>
	<!-- #Footer -->
	<footer id="Footer" class="clearfix">

		<?php if ( $footer_call_to_action = mfn_opts_get('footer-call-to-action') ): ?>
		<div class="footer_action">
			<div class="container">
				<div class="column one column_column">
					<?php echo do_shortcode( $footer_call_to_action ); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php
			$sidebars_count = 0;
			for( $i = 1; $i <= 5; $i++ ){
				if ( is_active_sidebar( 'footer-area-'. $i ) ) $sidebars_count++;
			}

			if( $sidebars_count > 0 ){

				$footer_style = '';

				if( mfn_opts_get( 'footer-padding' ) ){
					$footer_style .= 'padding:'. mfn_opts_get( 'footer-padding' ) .';';
				}

				echo '<div class="widgets_wrapper" style="'. $footer_style .'">';
					echo '<div class="container">';

						if( $footer_layout = mfn_opts_get( 'footer-layout' ) ){
							// Theme Options

							$footer_layout 	= explode( ';', $footer_layout );
							$footer_cols 	= $footer_layout[0];

							for( $i = 1; $i <= $footer_cols; $i++ ){
								if ( is_active_sidebar( 'footer-area-'. $i ) ){
									echo '<div class="column '. $footer_layout[$i] .'">';
										dynamic_sidebar( 'footer-area-'. $i );
									echo '</div>';
								}
							}

						} else {
							// Default - Equal Width

							$sidebar_class = '';
							switch( $sidebars_count ){
								case 2: $sidebar_class = 'one-second'; break;
								case 3: $sidebar_class = 'one-third'; break;
								case 4: $sidebar_class = 'one-fourth'; break;
								case 5: $sidebar_class = 'one-fifth'; break;
								default: $sidebar_class = 'one';
							}

							for( $i = 1; $i <= 5; $i++ ){
								if ( is_active_sidebar( 'footer-area-'. $i ) ){
									echo '<div class="column '. $sidebar_class .'">';
										dynamic_sidebar( 'footer-area-'. $i );
									echo '</div>';
								}
							}

						}

					echo '</div>';
				echo '</div>';
			}
		?>

		<?php if( mfn_opts_get('footer-hide') != 1 ): ?>
		
		
		<!-- Segunda Parte -->

		<div class="widgets_wrapper" style="padding:40px 0 10px;">
			<div class="container">
				<div class="column one-second">
					<aside id="text-9" class="widget widget_text">			
						<div class="textwidget">
							<div class="vc_row wpb_row vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic01.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic01.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic01.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic01-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic02.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic02.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic02-50x39.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic02-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic03.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic03.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic03-50x39.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic03-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>

								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic04.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic04.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic04-50x39.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic04-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>

								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic05.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic05.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic05-50x39.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic05-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>

								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
													<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic06.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic06.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic06-50x39.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic06-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
									</div>
							</div>

							<div class="vc_row wpb_row vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic07.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic07.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic07-50x39.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic07-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="wpb_single_image wpb_content_element vc_align_center">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic08.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic08.png 100w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic08-50x39.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic08-96x75.png 96w" sizes="(max-width: 100px) 100vw, 100px">
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper"></div>
									</div>
								</div>
								
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper"></div>
									</div>
								</div>
								
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper"></div>
									</div>
								</div>

								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper"></div>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>

				<!--second column -->

				<div class="column one-second">
					<aside id="text-11" class="widget widget_text">			
						<div class="textwidget">
							<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-8">
<div class="vc_column-inner">
<div class="wpb_wrapper">
<div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1550539875233" style="  margin-bottom: -80px;"
>
<figure class="wpb_wrapper vc_figure">
<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="586" height="86" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo-texto-bell.png" class="vc_single_image-img attachment-full" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo-texto-bell.png 586w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo-texto-bell-300x44.png 300w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo-texto-bell-260x38.png 260w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo-texto-bell-50x7.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo-texto-bell-150x22.png 150w" sizes="(max-width: 586px) 100vw, 586px"></div>
</figure></div>
<div class="vc_wp_search wpb_content_element">
<div class="widget widget_search">
<form method="get" id="searchform" action="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/">
<p>	<i class="icon_search icon-search-fine"></i><br>
	<a href="#" class="icon_close"><i class="icon-cancel-fine"></i></a></p>
<p>	<input type="text" class="field" name="s" placeholder="Ingresa tu e-mail"><br>
	<input type="submit" class="submit" value="" style="display:none;"></p>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-4">
<div class="vc_column-inner">
<div class="wpb_wrapper">
<div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
</div>
</div>
</div>
</div>
</div>
		</aside>
				</div>

			<div class="footer_copy">
				<div class="container">
					<div class="column one">

						<?php
							if( $back_to_top_position == 'copyright' ){
								echo '<a id="back_to_top" class="button button_js" href=""><i class="icon-up-open-big"></i></a>';
							}
						?>

						<!-- Copyrights -->
						<div class="copyright">
							<?php
								if( mfn_opts_get('footer-copy') ){
									echo do_shortcode( mfn_opts_get('footer-copy') );
								} else {
									echo '&copy; '. date( 'Y' ) .' '. get_bloginfo( 'name' ) .'. All Rights Reserved. <a target="_blank" rel="nofollow" href="https://muffingroup.com">Muffin group</a>';
								}
							?>
						</div>

						<?php
							if( has_nav_menu( 'social-menu-bottom' ) ){
								mfn_wp_social_menu_bottom();
							} else {
								get_template_part( 'includes/include', 'social' );
							}
						?>

					</div>
				</div>
			</div>

		<?php endif; ?>

		<?php
			if( $back_to_top_position == 'footer' ){
				echo '<a id="back_to_top" class="button button_js in_footer" href=""><i class="icon-up-open-big"></i></a>';
			}
		?>

	</footer>
<?php endif; ?>

</div><!-- #Wrapper -->

<?php
	// Responsive | Side Slide
	if( mfn_opts_get( 'responsive-mobile-menu' ) ){
		get_template_part( 'includes/header', 'side-slide' );
	}
?>

<?php
	if( $back_to_top_position == 'body' ){
		echo '<a id="back_to_top" class="button button_js '. $back_to_top_class .'" href=""><i class="icon-up-open-big"></i></a>';
	}
?>

<?php if( mfn_opts_get('popup-contact-form') ): ?>
	<div id="popup_contact">
		<a class="button button_js" href="#"><i class="<?php mfn_opts_show( 'popup-contact-form-icon', 'icon-mail-line' ); ?>"></i></a>
		<div class="popup_contact_wrapper">
			<?php echo do_shortcode( mfn_opts_get('popup-contact-form') ); ?>
			<span class="arrow"></span>
		</div>
	</div>
<?php endif; ?>

<?php do_action( 'mfn_hook_bottom' ); ?>

<!-- wp_footer() -->
<?php wp_footer(); ?>

</body>
</html>
