<?php 
$footer_logo = get_field('footer_logo', 'option'); 
$footer_content = get_field('footer_content', 'option'); 
$social = get_field('social', 'option'); 
$phone = get_field('phone', 'option'); 
$email = get_field('email', 'option'); 
$copyright = get_field('copyright', 'option'); 

?>

<footer class="footer-sec">
  <div class="container">
    <div class="footer-top mb-4">
      <div class="row">
        <!-- About Column -->
        <div class="col-sm-12 col-lg-3 col-md-6 footer-about mb-4 mb-lg-0">
          <a href="https://investorpartner.com.au" class="footer-logo d-block mb-3">
            <img decoding="async" src="<?php echo $footer_logo ?? ''; ?>" alt="Footer Logo" class="img-fluid">
          </a>
          <p class="footer-vision"><?php echo $footer_content ?? ''; ?></p>
        </div>

        <!-- Quick Links Column -->
        <div class="col-sm-12 col-lg-3 col-md-6 footer-links mb-4 mb-lg-0">
          <h3 class="footer-title mb-3">Quick Links</h3>
          <ul class="list-unstyled footer-menu">
            <li class="mb-2"><a href="https://investorpartner.com.au/about/">About</a></li>
            <li class="mb-2"><a href="https://investorpartner.com.au/buyer-agency/">Buyers Agency</a></li>
            <li class="mb-2"><a href="https://investorpartner.com.au/property-development/">Property Development</a></li>
            <li class="mb-2"><a href="https://investorpartner.com.au/tax-and-smsf/">Tax and SMSF</a></li>
          </ul>
        </div>

        <!-- Additional Links Column -->
        <div class="col-sm-12 col-lg-3 col-md-6 footer-links mb-4 mb-md-0">
          <h3 class="footer-title mb-md-3 mb-0">&nbsp;</h3>
          <ul class="list-unstyled footer-menu">
            <li class="mb-2"><a href="https://investorpartner.com.au/testimonials-updated/">Review</a></li>
            <li class="mb-2"><a href="https://investorpartner.com.au/learning-centre/">Market Update</a></li>
            <li class="mb-2"><a href="https://investorpartner.com.au/privacy-policy/">Privacy Policy</a></li>
            <li class="mb-2"><a href="https://investorpartner.com.au/terms-conditions/">Terms & Conditions</a></li>
          </ul>
        </div>

        <!-- Contact Column -->
        <div class="col-sm-12 col-lg-3 col-md-6 footer-contact">
          <h3 class="footer-title mb-3">Reach Us</h3>
          <div class="footer-social mb-4">
            <div class="social-icons d-flex gap-3">
              <?php 
                  if($social) :
                      foreach($social as $item) :
              ?>
                <a href="<?php echo $item['link'] ?? ''; ?>" class="social-link" target="_blank"><i class="<?php echo $item['icon'] ?? ''; ?>"></i></a>
              <?php 
                  endforeach;
              endif;
              ?>


              <!-- <a href="https://www.facebook.com/InvestorPartnerGroup" class="social-link" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.linkedin.com/company/77080688" class="social-link" target="_blank"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.instagram.com/helpmebuyau/" class="social-link" target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://www.tiktok.com/@helpmebuyau?lang=en" class="social-link" target="_blank"><i class="bi bi-tiktok"></i></a>
              <a href="https://www.youtube.com/@moxinreza" class="social-link" target="_blank"><i class="bi bi-youtube"></i></a> -->
            </div>
          </div>
          <ul class="list-unstyled contact-info">
            <li class="mb-3">
              <a href="tel:<?php echo isset($phone) ? str_replace(' ', '', $phone) : ''; ?>" class="contact-link d-flex align-items-center gap-2">
                <i class="bi bi-telephone"></i>
                <span><?php echo $phone ?? ''; ?></span>
              </a>
            </li>
            <li class="mb-3">
              <a href="mailto:<?php echo $email ?? ''; ?>" class="contact-link d-flex align-items-center gap-2">
                <i class="bi bi-envelope"></i>
                <span><?php echo $email ?? ''; ?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-3 mb-md-0">
          <div class="copyright text-lg-start text-center"><?php echo $copyright ?? ''; ?></div>
        </div>
        <div class="col-md-6 text-md-end">
          <div class="d-flex justify-content-md-end align-items-center gap-3">
            <!-- <a href="https://investorpartner.com.au/book-free-consultation/" class="btn btn-primary consultation-btn">Book your free investor consultation</a> -->
            <button class="btn btn-link p-0 scroll-top"><i class="bi bi-caret-up"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>