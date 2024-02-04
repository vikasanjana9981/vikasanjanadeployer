	<?php
	/**
	 * The template for displaying product content in the single-product.php template
	 *
	 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
	 *
	 * HOWEVER, on occasion WooCommerce will need to update template files and you
	 * (the theme developer) will need to copy the new files to your theme to
	 * maintain compatibility. We try to do this as little as possible, but it does
	 * happen. When this occurs the version of the template file will be bumped and
	 * the readme will list any important changes.
	 *
	 * @see     https://woo.com/document/template-structure/
	 * @package WooCommerce\Templates
	 * @version 3.6.0
	 */

	defined( 'ABSPATH' ) || exit;

	global $product;

	/**
	 * Hook: woocommerce_before_single_product.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 */
	do_action( 'woocommerce_before_single_product' );

	if ( post_password_required() ) {
		echo get_the_password_form(); // WPCS: XSS ok.
		return;
	}
	?>
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>


	<section class="singleProductSection">
		<div class="sideContainer">
			<div class="singleProductDetails">
				<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
				?>

				<div class="summary entry-summary">
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );

					// Hook for Adding short description
					function custom_before_add_to_cart_content() {
						// Your custom content or code goes here
						echo '<p>This is my custom content above the add to cart form.</p>';
					}
					add_action('woocommerce_before_add_to_cart_form', 'custom_before_add_to_cart_content');
					
					?>
				</div>
			</div>	
		</div>
	</section>

	<section class="serumSection">
		<div class="sideContainer">
			<div class="serumDiv">	
				<div class="serumFormula">	
					<h2>This vegan/paraban free serum, offers one of the most potent, and purest topical formulas available.</h2>
					<p>Matrixyl 3000 contains 2 peptides, that work synergistically to signal cells to produce more collagen. Argireline is a peptide that aides in eliminating wrinkles caused by muscle movement, and Vitamin C, protects the skin against free radical damage. Together, this is a powerhouse product, thats ideal for use in the evening.</p>
					
					<div class="accordion">
						<div class="accordion-item-single"> 
							<input type="checkbox" id="accordion1">
							<label for="accordion1" class="accordion-item-single-title"><span class="icon-single"></span>Lorem Ipsum</label>
							<div class="accordion-item-single-desc">Serum</div>
						</div>

						<div class="accordion-item-single">
							<input type="checkbox" id="accordion2">
							<label for="accordion2" class="accordion-item-single-title"><span class="icon-single"></span>Augue morbi non</label>
							<div class="accordion-item-single-desc">The times.</div>
						</div>

						<div class="accordion-item-single">
							<input type="checkbox" id="accordion3">
							<label for="accordion3" class="accordion-item-single-title"><span class="icon-single"></span>Commodo elit</label>
							<div class="accordion-item-single-desc">A successful</div>
						</div>
					</div>	
				</div>
				<div class="serumFormulaImage">
					<img src="http://localhost/project/wp-content/uploads/2024/01/pexels-shiny-diamond-3762876-2.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="customerReviewSection">
		<div class="sideContainer">
			<div class="customerReviewDiv">
				<h2>Customer Reviews</h2>

				<div class="customerReviewBlock">
					<div class="customerReviewHead">
						<h4>Leslie Alexander</h4>
						<span>Verified Order</span>
						<img src="http://localhost/project/wp-content/uploads/2024/02/stars-2.png">
					</div>
					<div class="customerReviewContent">
						<p class="customerReviewContentpara">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquet vel sed amt.</9>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis est vitae posuere posuere erat cras at. Amet elementum faucibus ullamcorper sit aliquet morbi orci tellus. Gravida morbi tellus quam venenatis et, nulla. Semper enim, vitae aliquam egestas fringilla quis mauris turpis.</p>
						<span>December 12, 2021</span>
					</div>
				</div>

				<div class="customerReviewBlock">
					<div class="customerReviewHead">
						<h4>Jacob Jones</h4>
						<span>Verified Order</span>
						<img src="http://localhost/project/wp-content/uploads/2024/02/stars-3.png">
					</div>
					<div class="customerReviewContent">
						<p class="customerReviewContentpara">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
						<p>Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.</p>
						<span>October 30, 2021</span>
					</div>
				</div>

				<div class="customerReviewBlock">
					<div class="customerReviewHead">
						<h4>Jenny Wilson</h4>
						<span>Verified Order</span>
						<img src="http://localhost/project/wp-content/uploads/2024/02/stars-3.png">
					</div>
					<div class="customerReviewContent">
						<p class="customerReviewContentpara">Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu fermentum augue, sit amet convallis augue. Integer eu iaculis sem, sed euismod eros. Nulla facilisi. Proin luctus odio nunc, sed laoreet est bibendum vitae. Sed a eleifend ex. Integer varius rhoncus euismod.</p>
						<span>September 24, 2021</span>
					</div>
				</div>

				<div class="NavigationBar">
					<div class="pagination">
						<a href="javascript:void(0);"><img src="http://localhost/project/wp-content/uploads/2024/02/download-3.png"></a>
						<a href="javascript:void(0);">1</a>
						<a href="javascript:void(0);" class="active">2</a>
						<a href="javascript:void(0);">3</a>
						<a href="javascript:void(0);"><img src=http://localhost/project/wp-content/uploads/2024/02/download-2-1.png></a>
					</div>
				</div>
			</div>	
		</div>
	</section>
 
	<section class="likedProductSection">
		<div class="sideContainer">
			<div class="likedProduct">
				<h2>You might also like </h2>
				<div class="likedProductRow">
					<div class="wrapperDiv">
						<div class="likedProductSlider">
							<?php
								/**
								 * Hook: woocommerce_after_single_product_summary.
								 *
								 * @hooked woocommerce_output_product_data_tabs - 10
								 * @hooked woocommerce_upsell_display - 15
								 * @hooked woocommerce_output_related_products - 20
								 */

								//  Releted product section
								do_action( 'woocommerce_after_single_product_summary' );
								
								// function remove_sale_flash() {
								// 	remove_action( 'woocommerce_before_single_product', 'woocommerce_show_product_sale_flash', 10 );
								//  }
								//  add_action( 'wp', 'remove_sale_flash' );

								
								add_action( 'woocommerce_widget_shopping_cart_after_buttons' ); 
								
									
								


								//  function review_image(){
								// 	add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
								//  }
								//  add_action( 'wp', 'review_image' );

								

							?> 						
 
							<?php
								//do_action( 'woocommerce_after_single_product' );
	 						?> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 

