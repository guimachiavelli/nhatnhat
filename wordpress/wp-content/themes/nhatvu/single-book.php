<?php get_header(); ?>

	<section id="content" role="main">

			<?php 
				while ( have_posts() ) { 
					the_post();
			?>

				<article class="post">

					<figure class="cover">
						<?php the_post_thumbnail('book_cover'); ?>
					</figure>

					<header>
						<h1 class="title"><?php the_title(); ?></h1>
						<h2 class="author"><?php echo get_post_meta($post->ID, 'book_author', true); ?></h2>
					</header>

					<?php the_content(); ?>
				</article>

			<?php } ?>
		</section>

<?php get_footer(); ?>
