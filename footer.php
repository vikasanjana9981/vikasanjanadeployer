<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<div class="sideContainer">
			<div class="footerDiv">
				<ul>
					<li><img src="http://localhost/project/wp-content/uploads/2024/01/logo-white-1.png" alt=""></li>
					<li><a href="javascript:void(0)">Email : info@aestheticmaison.com</a></li>
					<li><a href="javascript:void(0)">Phone: +1 (713) 855-6036</a></li>
					<li>
						<div class="socialLinks">
							<a href="javascript:void(0)"><img src="http://localhost/project/wp-content/uploads/2024/01/et_twitter.png" alt=""></a>
							<a href="javascript:void(0)"><img src="http://localhost/project/wp-content/uploads/2024/01/fb.png" alt=""></a>
							<a href="javascript:void(0)"><img src="http://localhost/project/wp-content/uploads/2024/01/insta.png" alt=""></a>
						</div>
					</li>
				</ul>

				<ul>
					<li class="footerLinksHead">Company</li>
					<li><a href="javascript:void(0)">Home</a></li>
					<li><a href="javascript:void(0)">Contact</a></li>
					<li><a href="javascript:void(0)">about</a></li>
					<li><a href="javascript:void(0)">Shop</a></li>
				</ul>

				<ul>
					<li class="footerLinksHead">Categories</li>
					<li><a href="javascript:void(0)">Hair</a></li>
					<li><a href="javascript:void(0)">Fillers</a></li>
					<li><a href="javascript:void(0)">Beauty</a></li>
					<li><a href="javascript:void(0)">Miscellaneous</a></li>
					<li><a href="javascript:void(0)">Sale</a></li>
				</ul>

				<ul>
					<li class="footerLinksHead">Policies</li>
					<li><a href="javascript:void(0)">Terms Of Use</a></li>
					<li><a href="javascript:void(0)">Privacy Policy</a></li>
					<li><a href="javascript:void(0)">Shipping Policy</a></li>
					<li><a href="javascript:void(0)">Affiliate Policy</a></li>
					<li><a href="javascript:void(0)">Cookie Policy</a></li>
				</ul>


			</div>
		</div>


	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
