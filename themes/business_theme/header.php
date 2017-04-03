<?php

define ("URL",get_template_directory_uri());

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Business Conversion</title>

 	 <?php
	  wp_head();	  
	 ?>

  </head>
  <body>
    
	  <div class="container">
		  <header id="header" class="row">			  
			<img id="call_us" src="<?php echo URL; ?>/images/call_us.png" alt="call_us" />

			 <div id="logo_box" class="col-md-3 col-sm-12">
				<img id="logo" src="<?php echo URL; ?>/images/logo.png" alt="logo" /> 

			</div>
				  
			<nav id="nav" class="col-md-9 col-sm-12">
				<?php wp_nav_menu( array( 	'theme_location' => 'primary',
										 	'menu_id'		=> 'navbar'
										 	
											) ); ?>
				<!--
				<ul id="navbar">
					<li> <a class="active" href = "index.html">Home</a></li>
					<li> <a href = "">About</a></li>
					<li> <a href = "">Services</a></li>
					<li> <a href = "">Portfolio</a></li>
					<li> <a href = "">Contact</a></li>
				</ul>
				-->
			</nav>
			  
		  </header> <!-- /logo & nav -->