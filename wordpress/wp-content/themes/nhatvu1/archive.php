<?php get_header(); ?>

    <section id="content" role="main">


        <?php if (is_category()) { ?>
            <h1 class="title main">Posts sobre <?php single_cat_title(); ?></h1>
        <?php } ?>

			<?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                <article class="post">
                    <header>
                        <figure class="preview">
                            <?php the_post_thumbnail(); ?>
                        </figure>

						<h1 class="title"><?php the_title(); ?></h1>
					</header>
                    <?php the_excerpt('leia mais'); ?>
                </article>
                </a>

			<?php endwhile;?>


	</section><!-- #primary -->

<?php get_footer(); ?>
