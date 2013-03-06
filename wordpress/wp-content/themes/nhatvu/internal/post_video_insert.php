<?php
	add_action("save_post", "save_video");
	add_action("admin_init", "insert_videos");  


	function save_video() {
		global $post;
		if(is_object($post) && $post->ID > 0) {
			if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){  
				return $post_id;  
			} else {
				update_post_meta($post->ID, "video_code_1", $_POST["video_code_1"]);
				update_post_meta($post->ID, "video_code_2", $_POST["video_code_2"]);
				update_post_meta($post->ID, "video_code_3", $_POST["video_code_3"]);
				update_post_meta($post->ID, "video_code_4", $_POST["video_code_4"]);
			}
		}
	}



	function insert_videos(){
    	add_meta_box("personal-info-box", "Videos", "video_options", "post", "side", "default");
	}

	function video_options(){
        global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
?>  	
		<label for="video_code_1">Video #1</label>
		<input name="video_code_1" id="video_code_1" value="<?php echo get_previous_content('video_code_1', $post->ID); ?>">

		<label for="video_code_2">Video #2</label>
		<input name="video_code_2" id="video_code_2" value="<?php echo get_previous_content('video_code_2', $post->ID); ?>">

		<label for="video_code_4">Video #3</label>
		<input name="video_code_3" id="video_code_3" value="<?php echo get_previous_content('video_code_3', $post->ID); ?>">

		<label for="video_code_4">Video #4</label>
		<input name="video_code_4" id="video_code_4" value="<?php echo get_previous_content('video_code_4', $post->ID); ?>">
<?php

	}

?>
