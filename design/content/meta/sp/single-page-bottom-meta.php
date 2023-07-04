 <?php if ( get_theme_mod( 'yourseobook_single_page_bottom_meta_display_control' ) ) : ?>

<div class="container">


<div class="row" id="sp-bottom-metas">


<div class="col col-sm-2 col-md-2">

<time datetime="<?php echo get_the_date('l F j, Y'); ?>" itemprop="datePublished"><span class="dashicons dashicons-calendar-alt"></span> <?php echo get_the_date(); ?></time>

</div>



<div class="col col-sm-2 col-md-2"><span class="dashicons dashicons-clock"></span> <?php echo calculate_reading_time(); ?></div>



<div class="col col-sm-2 col-md-2"><span class="dashicons dashicons-admin-comments"></span> <a href="#comment-section" title="10 Comments" role="contentinfo" rel="me">10 Comments</a></div>



<div class="col col-sm-2 col-md-2"><span class="dashicons dashicons-chart-line"></span> <?php echo yourseobook_get_post_views(get_the_ID());?></div>



<div class="col col-sm-2 col-md-2"><span class="dashicons dashicons-admin-users"></span> <a href="#" role="link" rel="author" aria-label="Website Author">Username</a></div>



</div>

</div>
<style>
div#sp-bottom-metas {
	font-size: 14px;
	display: inline-block;
	width: 100%;
	margin: 0px auto;
	padding: 0px !important;
	text-align: center;
	color: #012359;
}
div#sp-bottom-metas .col.col-sm-2.col-md-2 {
	float: left;
	text-align: right;
	display: flex;
	padding: 0px 0px;
	width: auto;
	flex-direction: row;
	font-size: 16px;
	font-weight: 500;
	color: #012359;
	flex-wrap: nowrap;
	justify-content: flex-start;
}

div#sp-bottom-metas .col.col-sm-2.col-md-2 span.dashicons {
	display: flex;
	float: left;
	font-size: 21px;
	text-align: left;
	margin: 0px 15px;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-between;
	color: #012359;
	line-height: 1.65rem;
}

</style>
<?php endif; ?>

