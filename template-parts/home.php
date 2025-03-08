<?php
/**
 * template name:Home
 * The template for displaying Home pages
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; ?>

<section class="banner-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1 class="banner-title">Grow your Wealth through Property Investment Today!</h1>
                    <p class="banner-text">Achieve your financial and lifestyle goals with our team of experts to help you grow your investment property portfolios.</p>
                    <a href="https://investorpartner.com.au/booking-form/" class="btn btn-primary rounded-pill">Claim Your Free Strategy Session</a>
                    <div class="review-summary mt-4">
                        <p><span class="rating">5/5</span> Avg. from 100+ Google & Facebook reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-media">
                    <div class="video-wrapper">
                        <video autoplay muted loop playsinline preload="metadata">
                            <source src="<?php echo get_template_directory_uri(  ); ?>/assets/img/banner-video.mp4">
                        </video>
                    </div>
                    <div class="review-box mt-4">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(  ); ?>/assets/img//home1.png" alt="Andrew Steel" class="review-avatar" width="60" height="60">
                            <div class="review-meta ms-3">
                                <h5 class="review-author mb-0">Andrew Steel</h5>
                                <small class="text-muted">a year ago</small>
                            </div>
                        </div>
                        <p class="review-text mt-3">Moshin really knows what he's talking about. He has never let me down when it comes to Real Estate Investment strategies. Follow his advice and you'll go far! He's a good bloke too.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();

