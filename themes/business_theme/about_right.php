<?php

/* 
Template Name: About Right
*/

?>

<?php

get_header();

?>

<section id="small_banner" class="row">
	<div class="col-md-4">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="col-md-8">
	  <h2>We are a dynamic team with innovative ideas for you.</h2>
	</div>
	
</section> <!-- /small banner -->	

		  <section id="about_page" class="row">
			  
		  		<section id="about_main" >
			  
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				
				  </section>
			  
			  <?php get_sidebar( 'about' ) ?>
		  
		  </section>

<?php

get_footer();

?>