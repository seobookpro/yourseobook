  <?php if ( get_theme_mod( 'yourseobook_header_main_navigation_display_control' ) ) : ?>
    <div class="container-fluid">
<nav id="main-nav" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark master-header-nav-menu" aria-label="Offcanvas navbar large">
    <div class="container" id="thm">


<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_display_control' ) ) : ?>

<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="bookmark" role="link" type="link" aria-label="logo">

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_image_display_control' ) ) : ?>
<img src="<?php echo esc_html_e( get_theme_mod( 'yourseobook_header_logo_default_image' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="auto" height="40" role="img" aria-label="Logo" class="brandlogoimage">
<?php endif; ?>
<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_text_display_control' ) ) : ?>
<span class="brandlogotextfield"><?php echo esc_html_e( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_text_control' ) ); ?></span>
<?php endif; ?>

</a>


<?php endif; ?>


      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#headerMenuMaster" aria-controls="headerMenuMaster" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <?php if ( get_theme_mod( 'yourseobook_header_nav_menu_display_control' ) ) : ?>

      <div class="offcanvas offcanvas-end text-bg-dark"  tabindex="-1" id="headerMenuMaster" aria-labelledby="headerMenuMasterLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="headerMenuMasterLabel">Offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body masterheadernavmenu">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
 <?php endif; ?>



</div>

<?php endif; ?>




        </div>

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_master_menu_search_bar_master_display_control' ) ) : ?>

<div id="search-bar-master" class="d-flex">

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_master_menu_search_bar_google_search_engine_display_control' ) ) : ?>
<div id="hnm-sb" class="header-nav-menu-search-box search-form">
<script async src="https://cse.google.com/cse.js?cx=b4308747ac2994fa5"></script>

<div class="gcse-search"></div>
</div>
<?php endif; ?>

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_master_menu_search_bar_display_control' ) ) : ?>
<div id="hnm-sb">
<form role="search">
 <input type="text" name="search" class="header-nav-menu-search-box search-form"  role="search" placeholder="🔎 Search.." aria-label="Search">
</form>
</div>
</div>
<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_header_cta_button_display_control' ) ) : ?>
<?php if ( get_theme_mod( 'yourseobook_general_sitewide_brand_phone_number_control' ) ) : ?>


<a href="tel:<?php echo esc_html_e( get_theme_mod( 'yourseobook_general_sitewide_brand_phone_number_text_control' ) ); ?>"
class="header-cta-button" id="header-menu-phone" role="button" type="link" title="Call <?php echo esc_html_e( get_theme_mod( 'yourseobook_general_sitewide_brand_phone_number_text_control' ) ); ?> <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" rel="bookmark" aria-label="Call Now">
Call Now Button
 </a>



 <?php endif; ?>
 <?php endif; ?>

      </div>



    </div>
  </nav>
  </div>


    <?php endif; ?>