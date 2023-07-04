<div class="container-fluid footer-copy">
<div class="container">
  <footer class="py-5">
    <div class="row">

<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws1_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6">
        <div class="footer-widget-title">Widget Section One</div>
        <ul class="nav flex-column fws1">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws2_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws2">
        <div class="footer-widget-title">Widget Section Two</div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws3_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws3">
        <div class="footer-widget-title">Widget Section Three</div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws4_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws4">
        <div class="footer-widget-title">Widget Section Four</div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>

<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws5_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws5">
        <form>
          <div class="footer-widget-title">Subscribe to our newsletter</div>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
<?php endif; ?>

    </div>

<?php if ( get_theme_mod( 'yourseobook_footer_copy_info_navigation_menus_display_control' ) ) : ?>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top fcms">
<!-- yourseobook_brand_display_control -->

<?php if ( get_theme_mod( 'yourseobook_brand_display_control' ) ) : ?>
<div class="main-brand">©
<?php echo esc_html_e( date('Y') ); ?>
<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" role="link" type="link" rel="bookmark" class="footer-<?php echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) ); ?>" id="fm-<?php echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) ); ?>">
<span class="footer-brand-text"><?php echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) ); ?></span>
</a>. All rights reserved.</div>
   
<?php endif; ?>

      <div class="nav justify-content-center border-bottom pb-3 mb-3">

 <?php wp_nav_menu( array( 'theme_location'    => 'footer_main_menu') ); ?>

      </div>

    </div>
<?php endif; ?>

  </footer>
</div>
</div>