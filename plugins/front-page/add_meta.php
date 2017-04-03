<?php

/*
Plugin Name: Front Page Metabox
*/

//create the metabox contents
function create_fp_metabox ( $post ){
	//the output of the box
	
	wp_nonce_field( basename( __FILE__ ), 'fp_nonce' );
	
	//get the stored details
	$fp_stored_meta = get_post_meta( $post->ID );

	?>

	<!-- Banner section  -->
	<h3 class="fp-header">Banner Section</h3>
		<table class="fp-table">
			<tbody>
				<tr>
					<th>
						<label>
							First Caption
						</label>
					</th>
					<td>
						<input id="fp_caption1_txt" name="fp_caption1_txt" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_caption1_txt'); ?>"/>
					</td>
				</tr>
				
				<tr>
					<th>
						<label>
							Second Caption
						</label>
					</th>
					<td>
						<input id="fp_caption2_txt" name="fp_caption2_txt" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_caption2_txt'); ?>"/>
					</td>
				</tr>
				
				<tr>
					<th>
						<label>
							Button Text
						</label>
					</th>
					<td>
						<input id="fp_button_txt" name="fp_button_txt" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_button_txt'); ?>"/>
					</td>
				</tr>			
				
			</tbody>
		</table>
	<hr />

	<!-- Info section  -->
	<h3 class="fp-header">Info Section</h3>
		<table class="fp-table">
			<tbody>
				<tr>
					<th>
						<label>
							Left Image
						</label>
					</th>
					<td>
						<input type="button" id="fp_limage_url" class="image_button" value="Choose Image" />
						<input id="fp_limage_url_input" name="fp_limage_url_input" class="fp-imageurl" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_limage_url_input'); ?>" />
						<br>
						<img id="fp_limage_url_src" name="fp_limage_url_src" src="<?php echo fp_test_values($fp_stored_meta, 'fp_limage_url_input'); ?>" />

					</td>
				</tr>	
				<tr>
					<th>
						<label>
							Left Title
						</label>
					</th>
					<td>
						<input id="fp_left_title" name="fp_left_title" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_left_title'); ?>" />
					</td>
				</tr>
				
				<tr>
					<th>
						<label>
							Left Text
						</label>
					</th>
					<td>
						<textarea id="fp_ltext_text" name="fp_ltext_text" class="fp-textarea"><?php echo fp_test_values($fp_stored_meta, 'fp_ltext_text'); ?> </textarea>
					</td>
				</tr>
				
				<tr>
					<th>
						<label>
							Middle Image
						</label>
					</th>
					<td>
						<input type="button" id="fp_mimage_url" class="image_button" value="Choose Image" />
						<input id="fp_mimage_url_input" name="fp_mimage_url_input" class="fp-imageurl" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_mimage_url_input'); ?>" />
						<br>
						<img id="fp_mimage_url_src" name="fp_mimage_url_src" src="<?php echo fp_test_values($fp_stored_meta, 'fp_mimage_url_input'); ?>" />

					</td>
				</tr>	
				<tr>
					<th>
						<label>
							Middle Title
						</label>
					</th>
					<td>
						<input id="fp_mid_title" name="fp_mid_title" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_mid_title'); ?>" />
					</td>
				</tr>
				
				<tr>
					<th>
						<label>
							Middle Text
						</label>
					</th>
					<td>
					<textarea id="fp_mtext_text" name="fp_mtext_text" class="fp-textarea"><?php echo fp_test_values($fp_stored_meta, 'fp_mtext_text'); ?> </textarea>
					</td>
				</tr>
				
				<tr>
					<th>
						<label>
							Right Image
						</label>
					</th>
					<td>
						<input type="button" id="fp_rimage_url" class="image_button" value="Choose Image" />
						<input id="fp_rimage_url_input" name="fp_rimage_url_input" class="fp-imageurl" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_rimage_url_input'); ?>" />
						<br>
						<img id="fp_rimage_url_src" name="fp_rimage_url_src" src="<?php echo fp_test_values($fp_stored_meta, 'fp_rimage_url_input'); ?>" />

					</td>
				</tr>	
				<tr>
					<th>
						<label>
							Right Title
						</label>
					</th>
					<td>
						<input id="fp_right_title" name="fp_right_title" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_right_title'); ?>" />
					</td>
				</tr>
				
				<tr>
					<th>
						<label>
							Right Text
						</label>
					</th>
					<td>
						<textarea id="fp_rtext_text" name="fp_rtext_text" class="fp-textarea"><?php echo fp_test_values($fp_stored_meta, 'fp_rtext_text'); ?> </textarea>
					</td>
				</tr>
			</tbody>
		</table>
	<hr />

	<!-- Details section  -->
	<h3 class="fp-header">Details Section</h3>
		<table class="fp-table">
			<tbody>
				<tr>
					<th>
						<label>
							Left Title
						</label>
					</th>
					<td>
					<input id="fp_2_left_title" name="fp_2_left_title" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_2_left_title'); ?>" />
					</td>
				</tr>
				<tr>
					<th>
						<label>
							Left Image
						</label>
					</th>
					<td>
						<input type="button" id="fp_2_limage_url" class="image_button" value="Choose Image" />
						<input id="fp_2_limage_url_input" name="fp_2_limage_url_input" class="fp-imageurl" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_2_limage_url_input'); ?>" />
						<br>
						<img id="fp_2_limage_url_src" name="fp_2_limage_url_src" src="<?php echo fp_test_values($fp_stored_meta, 'fp_2_limage_url_input'); ?>" />
					</td>
				</tr>
				<tr>
					<th>
						<label>
							Left Text
						</label>
					</th>
					<td>
						<textarea id="fp_2_ltext_text" name="fp_2_ltext_text" class="fp-textarea"><?php echo fp_test_values($fp_stored_meta, 'fp_2_ltext_text'); ?> </textarea>
					</td>
				</tr>
				<tr>
					<th>
						<label>
							Middle Title
						</label>
					</th>
					<td>
					<input id="fp_2_mid_title" name="fp_2_mid_title" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_2_mid_title'); ?>" />
					</td>
				</tr>
				<tr>
					<th>
						<label>
							Middle Image
						</label>
					</th>
					<td>
						<input type="button" id="fp_2_mimage_url" class="image_button" value="Choose Image" />
						<input id="fp_2_mimage_url_input" name="fp_2_mimage_url_input" class="fp-imageurl" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_2_mimage_url_input'); ?>" />
						<br>
						<img id="fp_2_mimage_url_src" name="fp_2_mimage_url_src" src="<?php echo fp_test_values($fp_stored_meta, 'fp_2_mimage_url_input'); ?>" />
					</td>
				</tr>
				<tr>
					<th>
						<label>
							Middle Text
						</label>
					</th>
					<td>
						<textarea id="fp_2_mtext_text" name="fp_2_mtext_text" class="fp-textarea"><?php echo fp_test_values($fp_stored_meta, 'fp_2_mtext_text'); ?> </textarea>
					</td>
				</tr>
				
					<tr>
					<th>
						<label>
							Right Title
						</label>
					</th>
					<td>
					<input id="fp_2_right_title" name="fp_2_right_title" class="fp_input" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_2_right_title'); ?>" />
					</td>
				</tr>
				<tr>
					<th>
						<label>
							Right Image
						</label>
					</th>
					<td>
						<input type="button" id="fp_2_rimage_url" class="image_button" value="Choose Image" />
						<input id="fp_2_rimage_url_input" name="fp_2_rimage_url_input" class="fp-imageurl" type="text" value="<?php echo fp_test_values($fp_stored_meta, 'fp_2_rimage_url_input'); ?>" />
						<br>
						<img id="fp_2_rimage_url_src" name="fp_2_rimage_url_src" src="<?php echo fp_test_values($fp_stored_meta, 'fp_2_rimage_url_input'); ?>" />
					</td>
				</tr>
				<tr>
					<th>
						<label>
							Right Text
						</label>
					</th>
					<td>
						<textarea id="fp_2_rtext_text" name="fp_2_rtext_text" class="fp-textarea"><?php echo fp_test_values($fp_stored_meta, 'fp_2_rtext_text'); ?> </textarea>
					</td>
				</tr>
			</tbody>
		</table>
	<hr />


	<?php
	
}

//exectute the function that adds the metaboxes
function add_fp_metaboxes(){
	
	global $post; //get the $post info
	$home_page_id = get_option('page_on_front'); //get the id of the front page
	
	if ( $post->ID === $home_page_id){
		
		//remove the edit box
		remove_post_type_support( 'page', 'editor' );
		
		//each section will have its own metaboxes
		add_meta_box(
		"fp_meta_section_1", // id of the box
		__( 'Edit Sections', 'prfx-textdomain' ), //the title of  the box
		"create_fp_metabox", //the output of the box
		"page" //it will appear on all pages
		);
	}
	

}

//now register all the boxes
add_action(add_meta_boxes, add_fp_metaboxes);

/* this removes the edit field. it works 
function remove_pages_editor(){
    remove_post_type_support( 'page', 'editor' );
}   
add_action( 'init', 'remove_pages_editor' );

*/

/* Called when it's saved */
function save_fp_meta_settings( $post_id ){
	
	//this saves the meta info.
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'fp_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
	
	/*
	// Checks for input and saves if needed
	if( isset( $_POST[ 'fp_logo_url_input' ] ) ) {
		update_post_meta( $post_id, 'fp_logo_url_input', $_POST[ 'fp_logo_url_input' ] );
	}
	*/
	
	
	/* Save Banner */
	fp_save_settings ('fp_caption1_txt', $post_id);
	fp_save_settings ('fp_caption2_txt', $post_id);
	fp_save_settings ('fp_button_txt', $post_id);
	
	/* Next Section */
	fp_save_settings ('fp_limage_url_input', $post_id);
	fp_save_settings ('fp_left_title', $post_id);
	fp_save_settings ('fp_ltext_text', $post_id);
	
	fp_save_settings ('fp_mimage_url_input', $post_id);
	fp_save_settings ('fp_mid_title', $post_id);
	fp_save_settings ('fp_mtext_text', $post_id);
	
	fp_save_settings ('fp_rimage_url_input', $post_id);
	fp_save_settings ('fp_right_title', $post_id);
	fp_save_settings ('fp_rtext_text', $post_id);
	
	/* Next Section */
	fp_save_settings ('fp_2_limage_url_input', $post_id);
	fp_save_settings ('fp_2_left_title', $post_id);
	fp_save_settings ('fp_2_ltext_text', $post_id);
	
	fp_save_settings ('fp_2_mimage_url_input', $post_id);
	fp_save_settings ('fp_2_mid_title', $post_id);
	fp_save_settings ('fp_2_mtext_text', $post_id);
	
	fp_save_settings ('fp_2_rimage_url_input', $post_id);
	fp_save_settings ('fp_2_right_title', $post_id);
	fp_save_settings ('fp_2_rtext_text', $post_id);
	
}

add_action( 'save_post', 'save_fp_meta_settings' );

function fp_save_settings ( $name, $post_id ){
	
	//generic saving function
	//cuts down on code
	if( isset( $_POST[ $name ] ) ) {
		update_post_meta( $post_id, $name, $_POST[ $name ] );
	}
	
	
}


/* Add the Stylesheet */
function fp_add_style(){
	
	global $post; //get the $post info
	$home_page_id = get_option('page_on_front'); //get the id of the front page
	
	if ( $post->ID === $home_page_id){
 
		wp_enqueue_style( 'prfx_meta_box_styles', plugin_dir_url( __FILE__ ) . 'fp-box-styles.css' );
	}
}

add_action( 'admin_print_styles', 'fp_add_style' );


/* function to check and return values */
function fp_test_values( $meta, $value ){
	//checks if  the metavalue is stored
	if (isset($meta[$value])){
		return $meta[$value][0]; 
	}else {
		return $value. " Does not exist";
	}
}


/*
now the button code script
*/
function fp_image_enqueue() {

	global $post; //get the $post info
	$home_page_id = get_option('page_on_front'); //get the id of the front page
	
	if ( $post->ID === $home_page_id){
		wp_enqueue_media();
 
		// Registers and enqueues the required javascript.
		wp_register_script( 'meta-box-image', plugin_dir_url( __FILE__ ) . 'meta-box-image.js', array( 'jquery' ) );
		wp_localize_script( 'meta-box-image', 'meta_image',
			array(
				'title' => __( 'Choose or Upload an Image', 'prfx-textdomain' ),
				'button' => __( 'Use this image', 'prfx-textdomain' ),
			)
		);
		wp_enqueue_script( 'meta-box-image' );
	}
}
add_action( 'admin_enqueue_scripts', 'fp_image_enqueue' );
