<?php
	
	add_action("init", "create_link_section");
	add_action("save_post", "save_link");
	add_action("admin_init", "link_url");  

	//Create the post type
	function create_link_section() {
		register_post_type( "nota",
			array(
				"labels" => array(
					"name" => __( "Notas" ),
					"singular_name" => __( "Nota" )
				),
				"public" => true,
				"has_archive" => true,
				"menu_position" => 5,
				"hierarchical" => true, 
				"supports" => array("title", "editor", "excerpt")
			)
		);
	}
	

	function save_link() {
		global $post;
		if(is_object($post) && $post->ID > 0) {
			if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){  
				return $post_id;  
			} else {
				update_post_meta($post->ID, "nota_url", $_POST["nota_url"]);
			}
		}
	}



	function link_url(){
    	add_meta_box("personal-info-box", "URL da Nota", "link_url_options", "nota", "side", "default");
	}

	function link_url_options(){
        global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
?>  	
		<label for="nota_url">URL</label>
		<input name="nota_url" id="nota_url" value="<?php echo get_previous_content('nota_url', $post->ID); ?>">
<?php

	}

?>
