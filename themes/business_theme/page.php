<?php

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- check which page it is. and then do the THING -->

<?php if (get_the_title() == "Services"){
	
	get_template_part( 'content', 'services' );

}else{
	
?>
	<section id="small_banner" class="row">

		<div class="col-md-4">
			<h1><?php the_title(); ?> </h1>
		</div>

		<div class="col-md-8">
		  <h2>Caption</h2>
		</div>

	</section> <!-- /small banner -->

<?php

}
?>	  

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php

get_footer();

?>