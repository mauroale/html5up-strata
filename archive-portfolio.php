<?php
	
	/* 
	Template Name: Archives
	*/
	get_header(); 
	get_sidebar();

?>

<div id="primary" class="site-content">
<div id="content" role="main">


<?php
	$args = array(
		'posts_per_page' => 100,
		'post_type' => 'portfolio'
	);
	
	$portfolio = query_posts($args);
	

	if ( $portfolio ) : while ( $portfolio ) : the_post();
	//while ( have_posts() ) : the_post(); 
?>

	<?php include('partials/_portifolio.php'); ?>

<!--				
<h1 class="entry-title"><?php the_title(); ?></h1>

<div class="entry-content">

	<?php the_content(); ?>


</div>
<!-- .entry-content -->

	<?php endwhile; // end of the loop. ?>
<?php endif; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer() ?>