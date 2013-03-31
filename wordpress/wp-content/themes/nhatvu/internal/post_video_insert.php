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
				update_post_meta($post->ID, "video_code_5", $_POST["video_code_5"]);
				update_post_meta($post->ID, "video_code_6", $_POST["video_code_6"]);
				update_post_meta($post->ID, "video_code_7", $_POST["video_code_7"]);
				update_post_meta($post->ID, "video_code_8", $_POST["video_code_8"]);
				update_post_meta($post->ID, "video_code_9", $_POST["video_code_9"]);
				update_post_meta($post->ID, "video_code_10", $_POST["video_code_10"]);
				update_post_meta($post->ID, "video_code_11", $_POST["video_code_11"]);
				update_post_meta($post->ID, "video_code_12", $_POST["video_code_12"]);
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

		<label for="video_code_5">Video #5</label>
		<input name="video_code_5" id="video_code_5" value="<?php echo get_previous_content('video_code_5', $post->ID); ?>">

		<label for="video_code_6">Video #6</label>
		<input name="video_code_6" id="video_code_6" value="<?php echo get_previous_content('video_code_6', $post->ID); ?>">

		<label for="video_code_7">Video #7</label>
		<input name="video_code_7" id="video_code_7" value="<?php echo get_previous_content('video_code_7', $post->ID); ?>">

		<label for="video_code_8">Video #8</label>
		<input name="video_code_8" id="video_code_8" value="<?php echo get_previous_content('video_code_8', $post->ID); ?>">

		<label for="video_code_9">Video #9</label>
		<input name="video_code_9" id="video_code_9" value="<?php echo get_previous_content('video_code_9', $post->ID); ?>">

		<label for="video_code_10">Video #10</label>
		<input name="video_code_10" id="video_code_10" value="<?php echo get_previous_content('video_code_10', $post->ID); ?>">

		<label for="video_code_11">Video #11</label>
		<input name="video_code_11" id="video_code_11" value="<?php echo get_previous_content('video_code_11', $post->ID); ?>">

		<label for="video_code_12">Video #12</label>
		<input name="video_code_12" id="video_code_12" value="<?php echo get_previous_content('video_code_12', $post->ID); ?>">

<?php

	}

?>
