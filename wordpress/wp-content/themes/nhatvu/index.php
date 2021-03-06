<?php get_header(); ?>

		<ol id="home-work" role="main">


		<?php
            if ( have_posts() ) {
                $count_posts = wp_count_posts();
                $published_posts = $count_posts->publish;

				while ( have_posts() ) {
                    the_post();
                    $post_number = $number - $published_posts;

                    if ($number_class == '' || $number_class == 'third') {
                        $number_class = 'first';
                    } elseif ($number_class == 'first') {
                        $number_class = 'second';
                    } elseif ($number_class == 'second') {
                        $number_class = 'third';
                    }
		?>
                <li class="post <?php echo $number_class; ?>">
                    <article>
                        <header>
                            <hgroup>
                                <h1 class="title"><span class="post-number"><?php echo $published_posts; ?></span> <?php the_title(); ?> </h1>
                            </hgroup>
                        </header>
                        <aside class="media">
                            <figure class="viewing">
                                <?php the_post_thumbnail('large'); ?>
                                <figcaption><?php echo print_feature_caption($post->ID); ?></figcaption>
                            </figure>
                            <nav class="media-nav">
							    <div class="media-module images active">
								    <h1>Images</h1>
                                    <ol>
                                        <?php print_all_images($post->ID); ?>
                                    </ol>
                                </div>

                                <div class="media-module videos inactive">
                                    <h1>Videos</h1>
                                    <ol>
                                        <?php print_videos($post->ID); ?>
                                    </ol>
                                </div>

                            </nav>

                        </aside>

                        <div class="content">
                            <?php the_content(); ?>
					    </div>
                    </article>
                </li>
        <?php
                     $published_posts = $published_posts - 1;
                }

            } else {
        ?>
			<article class="error">
				<h1>Ops!</h1>
				<p>Foi mal! Nenhum artigo encontrado!</p>
			</article>
		<?php } ?>

	</ol>

<?php get_footer(); ?>
