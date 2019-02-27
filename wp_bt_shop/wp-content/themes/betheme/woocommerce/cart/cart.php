<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
				<th class="product-remove">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo wp_kses_post( $thumbnail );
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), wp_kses_post( $thumbnail ) );
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>' ) );
						}
						?>
						</td>

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input( array(
								'input_name'   => "cart[{$cart_item_key}][qty]",
								'input_value'  => $cart_item['quantity'],
								'max_value'    => $_product->get_max_purchase_quantity(),
								'min_value'    => '0',
								'product_name' => $_product->get_name(),
							), $_product, false );
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-remove">
							<?php
								// @codingStandardsIgnoreLine
								echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
									'<a href="%s" class="remove button button_js" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span class="button_icon">&times;</span></a>',
									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
									__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								), $cart_item_key );
							?>
						</td>

					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php
						// WC < 3.4 backward compatibility
						if( version_compare( WC_VERSION, '3.4', '<' ) ){
							wp_nonce_field( 'woocommerce-cart' );
						} else {
							wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' );
						}
					?>

				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		/*do_action( 'woocommerce_cart_collaterals' );*/
	?>
	<!--Carrito Modificiado-->
	<div class="cart_totals">
		<h2>Total del carrito</h2>

	<!-- Tabla -->
	<table cellspacing="0" class="shop_table shop_table_responsive">
		<tbody>
			<tr class="cart-subtotal">
				<th>Subtotal</th>
					<td data-title="Subtotal">
						<span class="woocommerce-Price-amount amount">
						<span class="woocommerce-Price-currencySymbol">$</span>390.00</span>
					</td>
			</tr>
			<tr class="woocommerce-shipping-totals shipping">
				<div class="shipping_address" style="display: block;">
				
				<th>Envío</th>
					<td data-title="Envío">

							<div class="woocommerce-shipping-fields__field-wrapper">
						<p class="form-row form-row-wide   validate-required validate-required" id="shipping_first_name_field">
							<label for="shipping_first_name_checkbox" class="woocommerce-form__label woocommerce-form__label-for-checkbox ">
								<input type="checkbox" id="shipping_first_name_checkbox" name="shipping_first_name" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" value="1">
									<span>INTERIOR (48hrs) - Costo: <strong>$150,00</strong></span>
							</label>
						</p>
						<p class="form-row form-row-wide   validate-required validate-required" id="shipping_last_name_field">
							<label for="shipping_last_name_checkbox" class="woocommerce-form__label woocommerce-form__label-for-checkbox ">
								<input type="checkbox" id="shipping_last_name_checkbox" name="shipping_last_name" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" value="1">
									<span>MALDONADO (48hrs) - <strong>ENVIO GRATIS</strong></span>
							</label>
						</p><div class="clear"></div>
						<p class="form-row form-row-wide   validate-required validate-required" id="shipping_company_field">
							<label for="shipping_company_checkbox" class="woocommerce-form__label woocommerce-form__label-for-checkbox ">
								<input type="checkbox" id="shipping_company_checkbox" name="shipping_company" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" value="1">
								<span>MONTEVIDEO - (24hrs) - <strong>ENVIO GRATIS</strong></span>
						</p>
					</div>
				</div>

						
					</td>
			</tr>

			<tr class="order-total">
				<th>Total</th>
					<td data-title="Total">
						<strong>
							<span class="woocommerce-Price-amount amount">
								<span class="woocommerce-Price-currencySymbol">$</span>390.00</span>
							</strong> 
					</td>
			</tr>

		
		</tbody>
	</table>

	<div class="wc-proceed-to-checkout">
		<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_right">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="230" height="46" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_01.png" class="vc_single_image-img attachment-full" alt="" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_01.png 230w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_01-50x10.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_01-150x30.png 150w" sizes="(max-width: 230px) 100vw, 230px"></div>
		</figure>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_left">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><a href="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/index.php/checkout1/" target="_self" class="vc_single_image-wrapper"><img width="178" height="47" src="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_02.png" class="vc_single_image-img attachment-full" alt="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/index.php/checkout1/" srcset="http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_02.png 178w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_02-50x13.png 50w, http://localhost/wordpress/HispanoSoluciones/wp_bt_shop/wp-content/uploads/2019/02/boton_carrito_02-150x40.png 150w" sizes="(max-width: 178px) 100vw, 178px"></a></div>
		</figure>
	</div>
</div></div></div></div>
	</div>
</div>
	
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
