<?php
	
	// create constants for often used info
	define("TEMPLATE_URL", get_template_directory_uri());
	define("SITE_URL", get_bloginfo("url"));


	// print classes my way, just because
	function print_classes() {
		$raw_classes = get_body_class();
		$class_length = count($raw_classes);
		$i = 0;
		while($i < $class_length) {
			$the_classes .= $raw_classes[$i] . ' ';
			$i++;
		}
		return $the_classes;
	}


	// print author's full name
	function print_author($the_id) {
		$author_name = the_author_meta( 'first_name', $the_id ) . ' ' . the_author_meta( 'last_name', $the_id ) . the_author_meta( 'last_name', $the_id );
		
		return $author_name;
	}

	// print categories for use as .classes
	function print_categories($the_id) {
		foreach((get_the_category($the_id)) as $category) { 
			$post_categories .= $category->category_nicename;
		} 
		return $post_categories;
	}
	

	//Helper function for creating new post types
	function get_previous_content($content, $id) {
        $custom = get_post_custom($id);
		
		if (is_object($custom) || is_array($custom) || isset($custom)) {
			if (isset($custom[$content][0])) {
				$previous = $custom[$content][0];
			} else {
				$previous = '';
			}
		} else { $previous = ''; }

		return $previous;

	}

	function print_page_permalink($the_page_name) {
    	$permalink = get_page_by_path($the_page_name); 
		$permalink = get_permalink($permalink->ID);
		return $permalink;
	}


	// substitute <p>'s with <figure>'s inside posts
	function add_figure_tag($pee) {
		$pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<figure>$1</figure>', $pee);
		return $pee;
	}
	add_filter( 'the_content', 'add_figure_tag', 30 );


?>
