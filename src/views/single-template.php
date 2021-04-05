<?php 


get_header();

while ( have_posts() ) :

	the_post();

	// Used in multiple places. - word count & printing out below.
	$content = apply_filters('cpt_event_transforms', $post->post_content);
	$meta 	 = get_post_meta($post->ID);
	$image   = get_the_post_thumbnail_url($post);

	// -------------------------- TEMPLATE START ------------------------------
	?>

	<article class="bg-white text-night">
		
	<?php include( __DIR__ . '/template-parts/title_description.php');  ?>  

		<div class="flex py-3"> 

			<div class="md:w-1/5 w-24"></div>

			<div class="md:w-3/5 overflow-hidden pb-40">

				<?php include( __DIR__ . '/template-parts/back_to_top.php');  ?> 

				<?php include( __DIR__ . '/template-parts/booking_button.php');  ?> 
				
				<?php include( __DIR__ . '/template-parts/youtube_lite.php');  ?>  

				<?php echo $content;  ?>   

			</div>

			<div class="md:w-1/5 w-24"></div>

		</div>

		<?php include( __DIR__ . '/template-parts/event_schema.php');  ?> 

	</article>


	<?php
	// -------------------------- TEMPLATE END --------------------------------


endwhile;

get_footer();