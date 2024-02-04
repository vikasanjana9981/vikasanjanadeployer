<?php
/*
Template Name: custom-home.php
*/
?>

<?php
    get_header();
?>

<!-- Banner -->

<section class="bannerSection">
    <div class="sideContainer">
        <div class="bannerDiv">
            <div class="bannerContent">
                <h1>Self care is the new </br> going out.</h1>
                <p>At Aesthetic Maison, we’re not just suppliers of high-quality health and beauty products; we’re experienced advocates of them. All of our products have been rigorously sourced through multiple vendors so that we may provide the best products at the best price.</p>
                <p>Browse our extensive range of products now!</p>
                <a href="javascript:void(0)" class="Btn">Explore Products</a>
            </div>
        </div>				
    </div>
</section>

<!-- Marquee -->

<section class="marqueeSection">
    <marquee> PARABEN FREE - SUlFATE FREE - PHTHALATE FREE - FREE OF MINERAL OILS - FREE OF GMOS - CRUELTY-FREE - CARBON NEUTRAL -</marquee>  
</section>

<!-- Our Team -->

<section class="teamSection">
<div class="sideContainer">
        <div class="teamDiv">
            <div class="teamImage">
                <img src="http://localhost/project/wp-content/uploads/2024/01/image-1.png" alt="">
            </div>
            <div class="teamContent">
                <h2>Our team of experts has extensive experience in the health, wellness, and beauty industry. </h2>
                <p>Aesthetic Maison is a U.S. based company specializing in U.K. and Korean products.  Our team of experts has extensive experience in the health, 
                    wellness, and beauty industry.  We work with the best vendors to offer superior products at the most competitive prices.
                </p>  

                <p>Our customer-centric mindset and our reputation was founded on the principles of building and maintaining exceptional customer relationships.
                    We offer secure payment options with fast, reliable delivery to ensure a smooth experience. Please feel free to contact us any time if you have 
                    questions or corncerns.
                </p>
                <a href="javascript:void(0)" class="Btn">Explore Products</a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->

<section class="productSection">
    <div class="sideContainer">
        <div class="productDiv">
            <h3>Featured Products</h3>
            <div class="productCard">
                <?php
                    // Create a function to use the products shortcode
                    function display_products_shortcode() {
                        // Set the shortcode attributes
                        $shortcode_atts = array(
                            'limit'   => 8,
                        );
                        // Convert attributes to string
                        $shortcode_string = '';
                        foreach ( $shortcode_atts as $key => $value ) {
                            $shortcode_string .= " $key=\"$value\"";
                        }
                        // Use the do_shortcode function to execute the products shortcode
                        echo do_shortcode( "[products$shortcode_string]" );
                    }
                    // Call the function to display products
                    display_products_shortcode();
                ?>
            </div>
            <a href="javascript:void(0)" class="Btn">View More Products</a>
        </div>
    </div>
</section>

<!-- Category -->

<section class="categorySection">
    <div class="sideContainer">
        <div class="cotegoryDiv">
            <div class="sale">
                <img src="http://localhost/project/wp-content/uploads/2024/01/sale-bg.png" alt="">
                <div class="saleContent">
                    <h3>Summer Sale!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elis erat morbi nam convallis.</p>
                    <a href="javascript:void(0)" class="Btn">Explore Products</a>
                </div>
            </div>
            <div class="category">
                <?php
                    echo do_shortcode ("[product_categories limit='4']");
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Founders -->

<section class="founderSection">
    <div class="sideContainer">
        <div class="founderDiv">
            <div class="founderContent">
                <h2>Sisters + Co-founders</h2>
                <p>Meet Meg and Mandy. Two sisters who asked themselves a couple questions which led to the creation of Aesthetic Maison. Why does the world 
                    treat periods so weird, maybe even wrong? Is the silent treatment society gives periods and puberty, somehow connected to the shame 
                    girls grow up feeling about their bodies?
                </p>    
                <p>Aesthetic Maison was created to make self care easier and healthier, while destigmatizing normal things like acne, puberty, periods. 
                    We're here to protect and nurture, and shift the narrative away from perfect skin and towards healthy skin.
                </p>
                <a href="javascript:void(0)" class="Btn">Learn More</a>
            </div>
            <div class="founderImage">
                <img src="http://localhost/project/wp-content/uploads/2024/01/AM-Meg-Mandy-About-Us-3.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Customer Review -->

<section class="customerSection">
    <div class="sideContainer">
        <div class="customerDiv">
            <h3>Not to brag, but customers are loving us.</h3>

            <div class="wrapper">
                <div class="customerSlider">

                    <div class="customerCard">
                        <img src="http://localhost/project/wp-content/uploads/2024/01/unnamed-file.png" alt="" class="quoteImg">
                        <p>The Services provided are really great, we received a genuine advice and at very reasonable cost. all the work went hassle-free and no complication</p>
                        <h4>-Celia Gray</h4>
                        <img src="http://localhost/project/wp-content/uploads/2024/01/stars.png" alt="">
                    </div>

                    <div class="customerCard">
                        <img src="http://localhost/project/wp-content/uploads/2024/01/unnamed-file.png" alt="" class="quoteImg">
                        <p>The links to high-value blog posts already make the book worth it, never mind the amazing insight and context provided by Shawn. Must buy for #CodeNewbies looking to break in or senior engineers looking to grow!</p>
                        <h4>-Jenny Wilson</h4>
                        <img src="http://localhost/project/wp-content/uploads/2024/01/stars-1.png" alt="">
                    </div>

                    <div class="customerCard">
                        <img src="http://localhost/project/wp-content/uploads/2024/01/unnamed-file.png" alt="" class="quoteImg">
                        <p>Wow what great service, I love it! It's is the most valuable business resource we have EVER purchased. We can't understand how we've been living without it. I strongly recommend it to everyone!!!!</p>
                        <h4>-Floyd Miles</h4>
                        <img src="http://localhost/project/wp-content/uploads/2024/01/stars.png" alt="">
                    </div>

                    <div class="customerCard">
                        <img src="http://localhost/project/wp-content/uploads/2024/01/unnamed-file.png" alt="" class="quoteImg">
                        <p>The Services provided are really great, we received a genuine advice and at very reasonable cost. all the work went hassle-free and no complication</p>
                        <h4>-Celia Gray</h4>
                        <img src="http://localhost/project/wp-content/uploads/2024/01/stars.png" alt="">
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signup -->

<section class="signupSection">
    <div class="sideContainer">
        <div class="signupContent">
            <h3>Let's keep it real.</h3>
            <p>Sign up for our newsletter for 10% off, self care tips, acne 101 and fun</br>community surprises. We love bluming with you! </p>
            <form>
                <input type="email" class="email" placeholder="Your Email" required>
                <button type="submit" class="Btn">Submit</button>
            </form>
        </div>    
    </div>
</section>

<!-- Footer -->

<?php
    get_footer();
?>


