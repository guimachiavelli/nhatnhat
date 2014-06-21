<?php get_header(); ?>
	<section class="main-module news" role="main">
		<header>
			<h1 class="title main">News</h1>
		</header>
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="content">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>

   			<?php endwhile;?>
	</section>
<?php get_footer(); ?>
