<?php get_header();?>

<div class="container-fluid" style="background:#ccc;color:#000;">

<div class="container col-xxl-8 px-4 py-5">
  <div class="row align-items-start g-5 py-5 land-about">


      <div class="col-8 col-sm-8 col-md-8">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <header>
    <h1><?php the_title(); ?></h1>
 </header>

 <div class="entry-content">
    <?php the_content(); ?>
 </div>

 <footer>

 </footer>
</article>

<?php endwhile; endif; ?>
</div>
      <div class="col-4 col-sm-4 col-md-4">
<?php if ( is_active_sidebar( 'yourseobook_single_page_sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'yourseobook_single_page_sidebar' ); ?>
<?php endif; ?>
 </div>
 </div>
 </div>
 </div>
<?php get_footer();?>
