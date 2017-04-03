<?php 

/*
Template Name: Contact Page
*/

get_header(); ?>

<section id="small_banner" class="row">
	<div class="col-md-4">
		<h1>Contact Us</h1>
	</div>
	<div class="col-md-8">
		<h2>Thank you for stopping by. How may we help you?</h2>
	</div>
</section>
<!-- /small banner -->
<section id="contact_page" class="row">
	<section id="contact_main">
		<form id="bs_submit"  action= "mailer-success.php" method="post">
			<label>Name</label>
			<input type="text" name="name" id="name" />
			<label></label>
			<label>Email</label>
			<input type="email" name="email" id="email" />
			<label>Subject</label>
			<input type="text" name="subject" id="subject" />
			<label>Message</label>
			<textarea name="text" id="text"></textarea>
			<input type="submit" id="submit" name="submit" />
		</form>
	</section>
	<aside id="contact_sidebar">
		<p id="aside_header_top" class="aside_header">Company Info</p>
		<address>
		  1234 Street Name 	<br>
		  City - 12345		<br>
		  County
		</address>
		<p id="aside_header_mid" class="aside_header">Contact Details</p>
		<address>
		  contact@mail.com			<br>
		  Website: www.business.com	<br>
		  Phone: 123-456-7890		
		</address>
		<p id="aside_header_bot" class="aside_header">Connect With Us</p>
		<img src="<?php echo get_template_directory_uri(); ?>/images/contact_linked_in.png" alt="linked_in" />
		<img src="<?php echo get_template_directory_uri(); ?>/images/contact_tw.png" alt="twitter" />
		<img src="<?php echo get_template_directory_uri(); ?>/images/contact_fb.png" alt="facebook" />
	</aside>
</section>

<?php get_footer(); ?>