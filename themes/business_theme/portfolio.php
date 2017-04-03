<?php

/*
Template Name: Portfolio Page
*/

get_header();

?>
<section id="small_banner" class="row">

	<div class="col-md-4">
		<h1>Portfolio</h1>
	</div>

	<div class="col-md-8">
	  <h2>All my best work.</h2>
	</div>

</section> <!-- /small banner -->

<section id="portfolio_page" class="row">			  
	<div class="col-md-12" id="portfolio_wrapper">
		
		<?php
		
		$args = array( 'post_type' => 'item', 'posts_per_page' => 9 );
		$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		
				$prfx_stored_meta = get_post_meta( $post->ID );
		
	?>
		<div class="portfolio_item">
			<img class="portfolio_image" src="<?php echo $prfx_stored_meta['meta-image'][0]; ?>" alt="port1">
			<h2 class="portfolio_header"><?php the_title(); ?></h2>
			<p class="portfolio_text"><?php echo $prfx_stored_meta['meta-textarea'][0]; ?></p>
		</div>
		
	<?php

			endwhile;
		
		?>
	</div> <!-- portfolio wrapper -->		  		  
</section>

<?php

get_footer();

?>

