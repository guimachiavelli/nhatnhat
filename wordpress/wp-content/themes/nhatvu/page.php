<?php get_header(); ?>

	<section id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="post">
					<header>
						<h1 class="title"><?php the_title(); ?></h1>
					</header>
					<?php the_content(); ?>
				</article>

			<?php endwhile;?>

	</section>

<?php get_footer(); ?>
