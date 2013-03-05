<?php get_header(); ?>
    <section id="content" class="shelf" role="main">
            <h1 class="title main">Estante</h1>
			<?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                <article class="book">
					<figure class="preview">
						<?php the_post_thumbnail('book_cover'); ?>
					</figure>
					<h1 class="title"><?php the_title(); ?> <span class="author">by <?php echo get_post_meta($post->ID, 'book_author', true); ?></span></h1>
                </article>
                </a>
			<?php endwhile;?>
	</section>
<?php get_footer(); ?>
