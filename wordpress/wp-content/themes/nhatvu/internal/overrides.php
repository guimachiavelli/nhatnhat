<?php
	
	// avoid having jquery duplicates
	if( !is_admin()){
		wp_deregister_script('jquery');
	}
	
	//cleaning up header trash
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');


?>
