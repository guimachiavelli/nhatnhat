<?php
	
	add_action("init", "create_shelf_section");
	add_action("save_post", "save_shelf_meta");
	add_action("admin_init", "shelf_box");


	//Create the post type
	function create_shelf_section() {
		register_post_type( "book",
			array(	
				"labels" => array(
					'name' => 'Books',
					'singular_name' => 'Book',
					'add_new' => 'Add New',
					'add_new_item' => 'Add New Book',
					'edit_item' => 'Edit Book',
					'new_item' => 'New Book',
					'all_items' => 'All Books',
					'view_item' => 'View Book',
					'search_items' => 'Search Books',
					'not_found' =>  'No books found',
					'not_found_in_trash' => 'No books found in Trash', 
					'parent_item_colon' => '',
					'menu_name' => 'Books'
				),
				"rewrite" => array("slug" => "estante"),
				"public" => true,
				"has_archive" => true,
				"menu_position" => 5,
				"hierarchical" => true, 
				"supports" => array("title", "editor", "thumbnail")
			)
		);
	}

	//Function for saving the info to the database
	function save_shelf_meta() {
		global $post;

		if(is_object($post) && $post->ID > 0) {
			if (defined("DOING_AUTOSAVE") && DOING_AUTOSAVE) {
				return $post_id;
			} else {
				update_post_meta($post->ID, "book_author", $_POST["book_author"]);
			}
		}
	}


	function shelf_box() {
    	add_meta_box("book-info-box", "Book Author", "shelf_options", "book", "side", "high");
	}
	

	function shelf_options() {
		global $post;

        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
?>  
		<input name="book_author" value="<?php echo get_previous_content('book_author', $post->ID); ?>">
		
<?php
	
	}

?>
