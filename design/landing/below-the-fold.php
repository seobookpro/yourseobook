<?php if ( get_theme_mod( 'yourseobook_main_land_below_the_fold_display_control' ) ) : ?>



<div id="btf-main" class="container-fluid below-the-fold-master">

<div id="btf--mc" class="container btf-main-container">

  <div class="row">
<!-- TO do Add sm-php control to select the number like col-sm-1,2,3,4,5,6 etc -->
<div class="col-sm-4 text-center">1</div>
<div class="col-sm-4 text-center">2</div>
<div class="col-sm-4 text-center">3</div>

<div class="px-4 text-center">
    <h2 id="btf-ht" class="btf-heading-title">
<?php echo apply_filters( 'the_content', get_theme_mod('yourseobook_main_land_below_the_fold_content_box_heading_title')); ?>

</h2>
    <div class="col mx-auto">


<div id="btf-content" class="btf-content-box">
<?php echo apply_filters( 'the_content', get_theme_mod('yourseobook_main_land_below_the_fold_content_box_wp_content_editor')); ?>



</div>
      <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">

        <a href="" title="" id="btf-btn-left" type="button" role="button" rel="bookmark" class="btf-button-left" aria-label="Button Left" target="_blank">Ask for More</a>
        <a href="" title="" id="btf-btn-right" type="button"  role="button" rel="bookmark"  class="btf-button-left" aria-label="Button Right" target="_blank">Explore the Demo</a>
    

  </div>

    </div>
  </div>


  </div>
  </div>
  </div>
<?php endif; ?>