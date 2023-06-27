<?php if (get_theme_mod('yourseobook_main_land_above_the_fold_display_control')) : ?>

<?php // if (get_theme_mod('yourseobook_header_main_navigation_master_menu_style_settings_sections')) : ?>

<div class="container-fluid above-the-fold" style="margin:50px auto;">

  <div class="container col-xxl-8 px-4 py-5 atftc">
    <div class="row atf">
      <div class="px-4  text-center">
        <div class="col">
          <section>
            <style>
              @keyframes fadeIn {
                0% {
                  opacity: 0;
                  transform: translateX(-100px);
                }
                100% {
                  opacity: 1;
                  transform: translateX(0);
                }
              }
            </style>
            <div class="fontTitleTypeWriter">
 <?php if ( get_theme_mod( 'yourseobook_main_land_above_the_fold_heading_h1_title_display_control' ) ) : ?>

              <h1 class="above-heading-h1">
<?php echo esc_html_e( get_theme_mod( 'yourseobook_main_land_above_the_fold_heading_h1_title_text_area' ) ); ?>
                <span style="animation: fadeIn 1s ease-in-out 1.8s; font-size: 51px; font-weight: 100;color:rgb(255, 255, 255);margin:0px;animation-fill-mode:both;">W</span>
                <span style="animation: fadeIn 1s ease-in-out 2.8s; font-size: 51px; font-weight: 100;color:rgb(255, 255, 255);margin:0px;animation-fill-mode:both;">e</span>
                <span style="animation: fadeIn 1s ease-in-out 3.8s; font-size: 51px; font-weight: 100;color:rgb(255, 255, 255);margin:0px;animation-fill-mode:both;">l</span>
                <span style="animation: fadeIn 1s ease-in-out 4.8s; font-size: 51px; font-weight: 100;color:rgb(255, 255, 255);margin:0px;animation-fill-mode:both;">c</span>
                <span style="animation: fadeIn 1s ease-in-out 5.8s; font-size: 51px; font-weight: 100;color:rgb(255, 255, 255);margin:0px;animation-fill-mode:both;">o</span>
                <span style="animation: fadeIn 1s ease-in-out 6.8s; font-size: 51px; font-weight: 100;color:rgb(255, 255, 255);margin:0px;animation-fill-mode:both;">m</span>
                <span style="animation: fadeIn 1s ease-in-out 7.8s; font-size: 51px; font-weight: 100;color:rgb(255, 255, 255);margin:0px;animation-fill-mode:both;">e</span>
              </h1>
 

<?php endif; ?>
              <h2 style="text-transform:uppercase;">

                <span style="animation: fadeIn 1s ease-in-out 9.8s; font-size: 81px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">S</span>
                <span style="animation: fadeIn 1s ease-in-out 10.8s; font-size: 81px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">E</span>
                <span style="animation: fadeIn 1s ease-in-out 11.8s; font-size: 81px; font-weight: 900;color:rgb(255, 255, 255);margin-right:30px;animation-fill-mode:both;">O</span>
                <span style="animation: fadeIn 1s ease-in-out 12.8s; font-size: 81px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">B</span>
                <span style="animation: fadeIn 1s ease-in-out 13.8s; font-size: 81px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">O</span>
                <span style="animation: fadeIn 1s ease-in-out 14.8s; font-size: 81px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">O</span>
                <span style="animation: fadeIn 1s ease-in-out 15.8s; font-size: 81px; font-weight: 900;color:rgb(255, 255, 255);margin-right:30px;animation-fill-mode:both;">K</span>
                <br>
                <span style="animation: fadeIn 1s ease-in-out 18.8s; font-size: 161px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">P</span>
                <span style="animation: fadeIn 1s ease-in-out 19.8s; font-size: 161px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">R</span>
                <span style="animation: fadeIn 1s ease-in-out 20.8s; font-size: 161px; font-weight: 900;color:rgb(255, 255, 255);margin:3px;animation-fill-mode:both;">O</span>
              </h2>
              <span style="animation: fadeIn 1s ease-in-out 22.8s; font-size: 61px; font-weight: 500;color:rgb(255, 255, 255);margin:20px 0px 60px 0px;display: block;animation-fill-mode:both;">600 + SERP Ranking Factors Included</span>

            </div>
          </section>

<div class="tinymce atf-paragraph">

<?php echo apply_filters( 'the_content', get_theme_mod('yourseobook_main_land_above_the_fold_text_content_section_tinymce_editor_settings')); ?>
</div>
<div class="tinymce">

<?php echo apply_filters( 'the_content', get_theme_mod('yourseobook_main_land_above_the_fold_text_content_section_tinymce_editor')); ?>

</div>
      



 <?php if (get_theme_mod('yourseobook_above_the_fold_general_buttons_display_control')) : ?>

<div class="d-grid gap-2 d-sm-flex justify-content-sm-center buttons-display-controls">

<div id="buttonCustomizer">


<?php if (get_theme_mod('yourseobook_above_the_fold_general_left_buttons_display_control')) : ?>
  <button  id="getFreeQuote" class="general-button">Get Free Quote</button>
<?php endif; ?>


<?php if (get_theme_mod('yourseobook_above_the_fold_general_right_buttons_display_control')) : ?>
<button  id="seeItOnGitHub" class="general-button">See it on GitHub</button>
<?php endif; ?>


</div>

</div>
<?php endif; ?>



        </div>
      </div>
    </div>
    <div class="atfb"></div>
  </div>
</div>
<?php // endif; ?>
<?php endif; ?>
