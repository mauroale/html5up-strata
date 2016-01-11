<?php
	
	/* 
	Template Name: Archives
	*/
	get_header(); 
	get_sidebar();

?>

<div id="primary" class="site-content">
<div id="content" role="main">

	<div class="row">

		<?php 
			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 100 );
			$the_query = new WP_Query( $args ); 

			if ( $the_query->have_posts() ) { 
				while ( $the_query->have_posts() ){
					 $the_query->the_post(); 
					 include('partials/_portifolio.php');
				} wp_reset_postdata(); 

			}else{  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php } ?>
		

	</div>


</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer() ?>