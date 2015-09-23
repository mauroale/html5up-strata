<article class="6u 12u$(xsmall) work-item">
	<a href="<?php echo  get_template_directory_uri() . 'images/fulls/01.jpg'?> " class="image fit thumb">
		<!--
			<img src="<?php echo  get_template_directory_uri() . '/images/thumbs/01.jpg' ?> " alt="" />
		-->
	
		<?php 	the_post_thumbnail(array(348,204)); ?>
	</a>

	<div class="work-item-text">
		<h3> <?php the_title() ?> </h3>
		<p><?php the_content()  ?></p>
	</div>
</article>