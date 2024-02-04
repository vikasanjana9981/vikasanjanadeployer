<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', false ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

	<div class="cosmeticProducts">
		<div class="sideContainer">
			<h1>Our line of cosmetic products</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate ultricies faucibus magna orci at ornare. Dolor lectus eu, consectetur nibh ut arcu enim, bibendum. Aenean id ultrices purus ipsum dui, sagittis scelerisque adipiscing. Ultrices enim sapien leo, nisl adipiscing metus.</p>
		</div>
	</div>

	<section class="shopProductSection">
		<div class="sideContainer">
			<div class="shopdiv">
				<div class="filterBar">

					<div class="accordion">
						<div class="accordion-item">
							<input type="checkbox" id="accordion1">
							<label for="accordion1" class="accordion-item-title"><span class="icon"></span>Category</label>
							<div class="accordion-item-desc">
								<?php if(is_active_sidebar('shop_widget')) : ?>
								<div class="shop_wrap">
									<?php dynamic_sidebar('shop_widget') ?>
								</div>	
								<?php endif; ?>	
							</div>
						</div>

						<div class="accordion-item">
							<input type="checkbox" id="accordion2">
							<label for="accordion2" class="accordion-item-title"><span class="icon"></span>Brand</label>
							<div class="accordion-item-desc">The times.</div>
						</div>

						<div class="accordion-item">
							<input type="checkbox" id="accordion3">
							<label for="accordion3" class="accordion-item-title"><span class="icon"></span>Price</label>
							<div class="accordion-item-desc">A successful</div>
						</div>
					</div>	

				</div>
				<div class="shopProduct">
					<?php
					if ( woocommerce_product_loop() ) {

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );

						woocommerce_product_loop_start();

						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();

								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action( 'woocommerce_shop_loop' );

								wc_get_template_part( 'content', 'product' );
							}
						}

						woocommerce_product_loop_end();

						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );
					}


					do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); 

					?>
				</div>

	
			</div>	
		</div>
	</section>
<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
