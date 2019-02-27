<?php
/**
 * The Header for our theme.
 *
 * @package Betheme
 * @author Muffin group
 * @link http://muffingroup.com
 */
?><!DOCTYPE html>
<?php
	if( $_GET && key_exists( 'mfn-rtl', $_GET ) ):
		echo '<html class="no-js" lang="ar" dir="rtl">';
	else:
?>
<html <?php language_attributes(); ?> class="no-js<?php esc_attr_e( mfn_user_os() ); ?>" <?php mfn_tag_schema(); ?>>
<?php endif; ?>

<!-- head -->
<head>

<!-- meta -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	if( mfn_opts_get( 'responsive' ) ){
		if( mfn_opts_get( 'responsive-zoom' ) ){
			echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
		} else {
			echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />';
		}

	}
?>

<?php do_action( 'wp_seo' ); ?>

<link rel="shortcut icon" href="<?php mfn_opts_show( 'favicon-img', THEME_URI .'/images/favicon.ico' ); ?>" />
<?php if( mfn_opts_get('apple-touch-icon') ): ?>
<link rel="apple-touch-icon" href="<?php mfn_opts_show( 'apple-touch-icon' ); ?>" />
<?php endif; ?>

<!-- wp_head() -->
<?php wp_head(); ?>
</head>

<!-- body -->
<body <?php body_class(); ?>>

	<?php do_action( 'mfn_hook_top' ); ?>

	<?php get_template_part( 'includes/header', 'sliding-area' ); ?>

	<?php if( mfn_header_style( true ) == 'header-creative' ) get_template_part( 'includes/header', 'creative' ); ?>

	<!-- #Wrapper -->
	<div id="Wrapper">

		<?php
			// Featured Image | Parallax ----------
			$header_style = '';

			if( mfn_opts_get( 'img-subheader-attachment' ) == 'parallax' ){

				if( mfn_opts_get( 'parallax' ) == 'stellar' ){
					$header_style = ' class="bg-parallax" data-stellar-background-ratio="0.5"';
				} else {
					$header_style = ' class="bg-parallax" data-enllax-ratio="0.3"';
				}

			}
		?>

		<?php if( mfn_header_style( true ) == 'header-below' ) echo mfn_slider(); ?>

		<!-- #Header_bg -->
		<div id="Header_wrapper" <?php echo $header_style; ?>>

			<!-- #Header -->
			<!--Header Modificado -->


<header id="Header">

	<!-- .header_placeholder 4sticky  -->
	<div class="header_placeholder"></div>

		<div id="Top_bar" class="">
			<div class="container">
				<div class="column one">
					
  					<!--#Top Bar -->
					<!--HEader Modificado -->

<div id="Top_bar" class="" style="top: 61px;">

	<div class="container">	
		<div class="top_bar_left clearfix">
			<div class="vc_row wpb_row vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-2">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							
						<!-- Logo -->
							<div class="logo">
								<a id="logo" href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop" title="shop" data-height="60" data-padding="15">
								<img class="logo-main scale-with-grid" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-retina="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-height="38" alt="logo">
								<img class="logo-sticky scale-with-grid" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-retina="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-height="38" alt="logo">
								<img class="logo-mobile scale-with-grid" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-retina="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-height="38" alt="logo">
								<img class="logo-mobile-sticky scale-with-grid" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-retina="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/logo.png" data-height="38" alt="logo">
								</a>
							</div>				
						</div>
					</div>
				</div>
		
		
	<!-- Segundo Metodo -->


				<div class="wpb_column vc_column_container vc_col-sm-2" style="margin-top: 30px;">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="vc_wp_search wpb_content_element">
								<div class="widget widget_search">
									<form method="get" id="searchform" action="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/" _lpchecked="1">
										<i class="icon_search icon-search-fine"></i>
											<a href="#" class="icon_close">
												<i class="icon-cancel-fine"></i>
											</a>
										
										<input type="text" class="field" name="s" placeholder="Enter your search">			
										<input type="submit" class="submit" value="" style="display:none;">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="wpb_column vc_column_container vc_col-sm-2"style="margin-top: 30px;">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="wpb_single_image wpb_content_element vc_align_center">
								<figure class="wpb_wrapper vc_figure">
									<div class="vc_single_image-wrapper   vc_box_border_grey">
										<img width="223" height="37" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic09.png" class="vc_single_image-img attachment-full" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic09.png 223w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic09-50x8.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic09-150x25.png 150w" sizes="(max-width: 223px) 100vw, 223px">
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<div class="wpb_column vc_column_container vc_col-sm-2" style="margin-top: 30px;">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="wpb_single_image wpb_content_element vc_align_center">
								<figure class="wpb_wrapper vc_figure">
									<div class="vc_single_image-wrapper   vc_box_border_grey">
										<img width="172" height="40" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic10.png" class="vc_single_image-img attachment-full" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic10.png 172w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic10-50x12.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic10-150x35.png 150w" sizes="(max-width: 172px) 100vw, 172px">
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<div class="wpb_column vc_column_container vc_col-sm-2" style="margin-top: 30px;">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="wpb_single_image wpb_content_element vc_align_center">
								<figure class="wpb_wrapper vc_figure">
									<div class="vc_single_image-wrapper   vc_box_border_grey">
										<img width="157" height="42" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic11.png" class="vc_single_image-img attachment-full" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic11.png 157w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic11-50x13.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/pic11-150x40.png 150w" sizes="(max-width: 157px) 100vw, 157px">
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<div class="wpb_column vc_column_container vc_col-sm-2"style="margin-top: 30px;">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-left vc_icon_element-have-style">
								<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-md vc_icon_element-style-rounded vc_icon_element-background vc_icon_element-background-color-white">
	
									<a id="header_cart_copy" href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/index.php/cart/">
									<i class="icon-bag-fine"></i>
									</a>	
								</div>
							</div>
						</div>
					</div>
				</div>
						
			
			<!--Sub-Menu -->
			<div class="menu_wrapper">
				<div class="vc_row wpb_row vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-3">
						<div class="vc_column-inner">
							<div class="wpb_wrapper"></div>
						</div>
					</div>

					<div class="wpb_column vc_column_container vc_col-sm-6">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<!--<div class="wpb_text_column wpb_content_element ">-->
									<!--<div class="wpb_wrapper">-->
										<nav id="menu" style="background-color: #b61615;">
											<ul id="menu-main-menu" class="menu menu-main">
												<li id="menu-item-2321" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2319 current_page_item">
													<a href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/">
														<span>BELLEZA</span>
													</a>
												</li>
												<li id="menu-item-2323" class="menu-item menu-item-type-post_type menu-item-object-page">
													<a href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/index.php/shop/">
														<span>SALUD</span>
													</a>
												</li>
												<li id="menu-item-2342" class="menu-item menu-item-type-post_type menu-item-object-page">
													<a href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/index.php/local-centres/">
														<span>FITNESS</span>
													</a>
												</li>
												<li id="menu-item-2341" class="menu-item menu-item-type-post_type menu-item-object-page">
													<a href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/index.php/articles/">
														<span>COCINA</span>
													</a>
												</li>
												<li id="menu-item-2322" class="menu-item menu-item-type-post_type menu-item-object-page last">
													<a href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/index.php/contact/">
														<span>HOGAR Y HERRAMIENTAS</span>
													</a>
												</li>
												<li id="menu-item-2324" class="menu-item menu-item-type-custom menu-item-object-custom last">
													<a target="_blank" href="http://themeforest.net/item/betheme-responsive-multipurpose-wordpress-theme/7758048?ref=muffingroup">
														<span>LANZAMIENTOS</span>
													</a>
												</li>
											</ul>
										</nav>
		   							<!--</div>-->
								<!--</div>-->
							</div>
						</div>
					</div>

					<div class="wpb_column vc_column_container vc_col-sm-3">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<!--<div class="wpb_single_image wpb_content_element vc_align_center">-->
									<figure class="wpb_wrapper vc_figure">
										<a href="http://#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
											<img width="155" height="35" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton-lista.png" class="vc_single_image-img attachment-full" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton-lista.png 155w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton-lista-150x34.png 150w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton-lista-50x11.png 50w" sizes="(max-width: 155px) 100vw, 155px">
										</a>
									</figure>
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>

					</div>

				</div>
		</div>
	</div>
</div> 
		
</header>