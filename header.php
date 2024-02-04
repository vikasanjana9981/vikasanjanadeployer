<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<div class="logo">
			<img src="http://localhost/project/wp-content/uploads/2024/01/logo.png" alt="">
			Here is new changes
			Hello good is here
			Hello
		</div>

		<div class="sideContainer">
			<div class="headerMenu">
				<div class="mainMenu">
					<?php
						wp_nav_menu(
							array(
								'menu' => 'Main menu',
							)
						);
					?>
				</div>
				<div class="iconMenu">
					<ul>
						<li><a href="javascript:void(0)" class="searchIcon"><img src="http://localhost/project/wp-content/uploads/2024/01/ei_search.png" alt=""></a></li>
						<li><a href="javascript:void(0)" class="accountIcon"><img src="http://localhost/project/wp-content/uploads/2024/01/mdi-light_account.png" alt=""></a></li>
						<li><a href="javascript:void(0)" class="cartIcon"><img src="http://localhost/project/wp-content/uploads/2024/01/ph_bag-thin.png" alt=""></a></li>
					</ul>
				</div>
			</div>	
		</div>

	</header><!-- #masthead -->

	<div class="cartSidebar">
		<div class="cardSidebarTitle">
			<h3>Cart</h3>
			<a href="#" class="close-button"><span class="close-icon">X</span></a>
			
		</div>
		<div class="cardBody">
			<?php woocommerce_mini_cart(); ?>
		</div>
	</div>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
