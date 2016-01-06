<article class="6u 12u$(xsmall) work-item">
	<a  class="image fit thumb" 
		href="<?php 
				 $thumb_url =
				 wp_get_attachment_image_src( get_post_thumbnail_id() ,'thumbnail-size', true); 
				 echo $thumb_url[0];
		 	?>
		 ">
		<!--
			<img src="<?php echo  get_template_directory_uri() . '/images/thumbs/01.jpg' ?> " alt="" />
		-->
	
		<?php 	the_post_thumbnail(array(348,204)); ?>
		
	</a>
<h3> <a href="<?php  echo get_post_meta( get_the_ID() , 'link' , true); ?>" target="_blank"> <?php the_title() ?> </a> </h3>	
	<div class="work-item-text">
			
		<p><?php the_content()  ;   ?></p>
	</div>
</article>