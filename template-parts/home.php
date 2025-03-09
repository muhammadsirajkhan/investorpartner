<?php

/**
 * template name:Home
 * The template for displaying Home pages
 */

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<?php endwhile; ?>

<section class="banner-section" style="background-image: url(<?php echo get_template_directory_uri(  ); ?>/assets/img/banner.jpg);">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5">
                <div class="banner-content">
                    <h1>Grow your Wealth through Property Investment Today!</h1>
                    <p>Achieve your financial and lifestyle goals with our team of experts to help you grow your investment property portfolios.</p>
                    <a href="https://investorpartner.com.au/booking-form/" class="btn btn-primary rounded-pill">Claim Your Free Strategy Session</a>
                    <div class="review-summary mt-4">
                        <p><span class="rating">5/5</span> Avg. from 100+ Google & Facebook reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-media">
                    <div class="video-wrapper">
                        <video autoplay muted loop playsinline preload="metadata" class="banner-video">
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-video.mp4">
                        </video>
                    </div>
                    <div class="review-box">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home1.png" alt="Andrew Steel" class="review-avatar" width="60" height="60">
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

<section class="feature-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 feature-logos">
                <h2 class="feature-title mb-5">We have been featured in</h2>
                <div class="feature-grid">
                    <div class="row g-4 align-items-center">
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/invest-1.png" class="img-fluid" alt="Investment Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/abcnews-1.png" class="img-fluid" alt="ABC News Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/invest2-1.png" class="img-fluid" alt="Investment Logo 2" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/7_news_logo.png" class="img-fluid" alt="7 News Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Champions_2023_Blue_Finalist_Logo2.png" class="img-fluid" alt="Champions Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Pizza-Property.png" class="img-fluid" alt="Pizza Property Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/FBC-Badge-Circle-Blue2.png" class="img-fluid" alt="FBC Badge Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Forbes_logo2.png" class="img-fluid" alt="Forbes Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/7ff26bf1-d1f1-4b23-a49e-d6db4721b62b.png" class="img-fluid" alt="Partner Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ad.png" class="img-fluid" alt="AFR Logo" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3edd6ea5-661e-447b-9a10-c6c3821401f0.png" class="img-fluid" alt="Partner Logo 2" loading="lazy"></div>
                        <div class="col-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mebourne.jpeg" class="img-fluid" alt="Melbourne Logo" loading="lazy"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 feature-video">
                <div class="ratio ratio-16x9">
                    <iframe loading="lazy" src="https://www.youtube.com/embed/-cNj8my-nY8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" class="rounded-4" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-sec py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="about-title mb-4">Are you Ready to build Wealth Without Compromising Lifestyle?</h2>
                    <div class="about-text">
                        <p>There has never been a better time to build wealth through property. Investing in property takes time, effort, and knowledge and without one, you can not succeed. Hence, we take the stress out of your journey by delivering bespoke strategies and tailored support along the way to help make informed choices to grow your portfolio with us.</p>
                        <p>To Have it all, you need someone to do it all for you. This is where IPG makes a difference. Our team of experts take you from <span class="text-danger">property investing</span> to starting a business in real estate and also providing tax, business structure and accounting support along the way. With IPG, you have the turnkey solutions to address all your property needs in time and at ease.</p>
                        <p>We help you secure rare off-market positive cash flow properties in Australia where you can manufacture equity today. Start your journey from a mediocre to a high net worth investor by <a href="https://investorpartner.com.au/book-free-consultation/">booking a free consultation with us Today!</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image text-lg-end text-center">
                    <img loading="lazy" class="img-fluid rounded-4" src="https://investorpartner.com.au/wp-content/uploads/2023/02/WhatsApp-Image-2023-02-19-at-10.56.25-PM.jpeg" alt="Property Investment">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="property-goals py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="property-goals-image">
                    <img loading="lazy" src="https://investorpartner.com.au/wp-content/uploads/2023/02/Website-images-2.jpg" class="img-fluid rounded-4" alt="Property Investment">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="property-goals-content">
                    <h2 class="section-title mb-4">Make your Property Goals A Reality with IPG!</h2>
                    <div class="content-wrapper">
                        <p>With over 10+ years, we have helped thousands of Australians to realize their property dreams and grow their portfolio for higher returns. At IPG, we say Invest with the best because:</p>
                        <ul class="feature-list">
                            <li>Gain access to off market properties through our wide network of agents who only deal with developers</li>
                            <li>Use Evidence-based approach through our data and insights team to find high growth properties</li>
                            <li>Get access to full and detailed feasibility and market research bespoke for growing your wealth</li>
                            <li>Offering arm chair investor experience for strategy and insights with end to end service for setting you up for future success</li>
                            <li>Learn to invest in Property through various investment strategies along the way with our Property education webinars tailored for our clients</li>
                        </ul>
                        <p>We aim to bring you high performing properties in Australia that is otherwise not available to all. We offer the due diligence so you can gain the confidence to achieve financial independence with right investment opportunities across Australia.</p>
                        <p>Whether you are starting new or a serial investor, we are available to discuss your real estate investment goals and expand it further.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feasibility-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-left">
                <h2 class="section-title mb-4">You Can Use Our Full Feasibilities & Market Research Bespoke to Each Property to Grow Your Wealth</h2>
                <div class="mb-4">
                    <a href="https://investorpartner.com.au/booking-form/" class="btn btn-primary rounded-pill">Claim Your Free Strategy Review</a>
                </div>
                <div class="review-box mt-0 bg-light p-4 rounded-4 shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(  ); ?>/assets/img/p.png" class="rounded-circle me-3" alt="Alex Parker">
                        <div>
                            <h3 class="h5 mb-1">Alex Parker</h3>
                            <p class="text-muted small mb-0">2 years ago</p>
                        </div>
                    </div>
                    <p class="mb-0 small">The team at investor partner introduced me to the property development world. They explained in a lot of detail the profitability, cashflow required and even the risks involved. They partnered with me in my developement and provided an end to end experience from finding the right property to getting it through council and ultimately building it. I have enjoyed the process and ofcourse the profits. Great bunch of people, super honest and transparent. Have already referred them to quite a few of my colleagues.</p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5" data-aos="fade-right">
                <div class="features-list">
                    <div class="feature-item mb-4">
                        <div class="d-flex mb-3">
                            <img loading="lazy" decoding="async" width="70" height="70" src="<?php echo get_template_directory_uri(  ); ?>/assets/img/1.png" class="me-3" alt="">
                            <div class="content">
                                <h4 class="h5">Your Trusted Partner for Real Estate Success</h4>
                                <p>At IPG, we are astute investors, developers, land splitters, flippers, subdivision specialist, tax and business structures expert ourselves. Thus, we are placing money where the mouth is. We share our own user stories and share already delivered feasibilities to provide end to end advice – Specific to your situation 100% free.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-item mb-4">
                        <div class="d-flex mb-3">
                            <img loading="lazy" decoding="async" width="70" height="70" src="<?php echo get_template_directory_uri(  ); ?>/assets/img/2.png" class="me-3" alt="">
                            <div class="content">
                                <h4 class="h5">Connecting You to Top Industry Professionals</h4>
                                <p>Our vast network includes agents, architects, conveyancers, town planners, designers, tax agents, brokers, building inspectors, other developers, project management personnel. Our Agency is based on long term relationships and professional negotiations creating and thus we ensure we can leverage these to access rare off-market opportunities all across Australia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-item mb-4">
                        <div class="d-flex mb-3">
                            <img loading="lazy" decoding="async" width="70" height="70" src="<?php echo get_template_directory_uri(  ); ?>/assets/img/3.png" class="me-3" alt="">
                            <div class="content">
                                <h4 class="h5">Transparency You Can Trust in Every Deal</h4>
                                <p>Unlike other Buyer's Agents who accept 'secret' commissions and kickbacks that may cloud their advice, we are truly independent, and our process is fully transparent.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-item mb-4">
                        <div class="d-flex mb-3">
                            <img loading="lazy" decoding="async" width="70" height="70" src="<?php echo get_template_directory_uri(  ); ?>/assets/img/4.png" class="me-3" alt="">
                            <div class="content">
                                <h4 class="h5">Experience-Driven Proposals for Immediate Equity Growth</h4>
                                <p>With our experience, we stand behind the data and present opportunities where the equity can be unlocked TODAY. All our proposals are based on market research and detailed feasibilities which means we are not gambling on FUTURE growth as that is a given.</p>
                            </div>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="d-flex mb-3">
                            <img loading="lazy" decoding="async" width="70" height="70" src="<?php echo get_template_directory_uri(  ); ?>/assets/img/5.png" class="me-3" alt="">
                            <div class="content">
                                <h4 class="h5">Inclusive Property Services with Rental Guarantees</h4>
                                <p>Oversee logistics including building and pest inspections, legal, finance and tax advice. Best of all, we provide rental guarantees across all established properties. For our astute investors, we also offer project management, renovations, construction and development management across various States of Australia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="client-sec py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="client-title mb-4">What Our Clients Say</h2>
                <p class="client-desc mb-5">We pride ourselves on delivering exceptional service and building strong relationships with our clients. Here’s what some of our satisfied customers have to say about their experience with us.</p>
            </div>
        </div>

        <div class="client-testimonials-wrap position-relative">
            <div class="swiper client-testimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client-item rounded-4 overflow-hidden shadow-sm text-center">
                            <iframe loading="lazy" src="https://www.youtube.com/embed/PaQIuF3n7s4" frameborder="0" class="" allowfullscreen></iframe>
                            <h4 class="client-name mb-3 mt-2">Jun&Ebie</h4>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-item rounded-4 overflow-hidden shadow-sm text-center">
                            <iframe loading="lazy" src="https://www.youtube.com/embed/8ZPLTUGF6N0" frameborder="0" class="" allowfullscreen></iframe>
                            <h4 class="client-name mb-3 mt-2">Sarah</h4>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-item rounded-4 overflow-hidden shadow-sm text-center">
                            <iframe loading="lazy" src="https://www.youtube.com/embed/504XFsqMU0g" frameborder="0" class="" allowfullscreen></iframe>
                            <h4 class="client-name mb-3 mt-2">Robert Moses</h4>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-item rounded-4 overflow-hidden shadow-sm text-center">
                            <iframe loading="lazy" src="https://www.youtube.com/embed/6MLL9sYY3lM" frameborder="0" class="" allowfullscreen></iframe>
                            <h4 class="client-name mb-3 mt-2">Moyes</h4>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-item rounded-4 overflow-hidden shadow-sm text-center">
                            <iframe loading="lazy" src="https://www.youtube.com/embed/Uxo79-UD27U" frameborder="0" class="" allowfullscreen></iframe>
                            <h4 class="client-name mb-3 mt-2">Catherien</h4>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-item rounded-4 overflow-hidden shadow-sm text-center">
                            <iframe loading="lazy" src="https://www.youtube.com/embed/MPI7QcLNbFE" frameborder="0" class="" allowfullscreen></iframe>
                            <h4 class="client-name mb-3 mt-2">Peterchen</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next client-item-next"></div>
            <div class="swiper-button-prev client-item-prev"></div>
        </div>
    </div>
    </div>
</section>



<section class="video-tabs-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Watch How IPG has helped Investors in Growing their Property Portfolios and Net-Worth over time</h2>
                <h3 class="text-center mb-4">Thoroughly Enjoyed Working With IPG</h3>
                <p class="text-center mb-5">If you are looking for a reliable growth partner to scale your property investing, then you have come to the right place. We have helped our clients achieve their wealth goals while enjoying their fuller life. See for yourself what our clients have to say about us.</p>
                <div class="video-tabs">
                    <div class="video-tab-content position-relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/video-bg-1.jpg');">
                        <button class="btn btn-play video-modal-trigger" type="button" data-bs-toggle="modal" data-bs-target="#videoModal" data-video-id="WeBM2vDgf5U">
                            <i class="bi bi-play"></i>
                        </button>
                    </div>
                    <div class="video-tabs-nav mt-4">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-tab active" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/video-bg-1.jpg" data-video-id="WeBM2vDgf5U">Rex Pangan</button>
                            <button class="btn btn-tab" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/video-bg-2.jpg" data-video-id="W8YSeEcouR8">Christine and Owen Nebril</button>
                            <button class="btn btn-tab" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/video-bg-3.jpg" data-video-id="e68RqPm7byE">Shreeya and Maninder Pandey</button>
                            <button class="btn btn-tab" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/video-bg-4.jpg" data-video-id="4dPENeE8ia8">Rajan Sharma</button>
                            <button class="btn btn-tab" data-bg="<?php echo get_template_directory_uri(); ?>/assets/img/video-bg-5.jpeg" data-video-id="mqg-1qQa9Xs">Tony Saunders</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content-sec free-ebook-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 content-left">
                <div class="content-wrap">
                    <h2 class="content-title mb-2">Free eBook</h2>
                    <h2 class="content-subtitle mb-4">Ready To Find High Growth, High Yield Properties?</h2>
                    <p class="content-text mb-4">An investment-grade property is your first step in building a sustainable portfolio. Hence, we bring you this 30 due diligence checklist to set the path straight for future wealth creation.</p>
                    <div class="form-wrapper">
                        <iframe frameborder="0" style="height:500px;width:99%;border:none;" src="https://api.leadconnectorhq.com/widget/form/acdiJJ66FVczXFIxONwd"></iframe>
                    </div>
                    <div class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 content-right">
                <div class="image-wrap text-end">
                    <img loading="lazy" src="https://investorpartner.com.au/wp-content/uploads/2024/03/380-X-519.png" class="img-fluid" alt="Investment Image" width="380" height="519">
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/video-tabs.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/video-tabs.js"></script>