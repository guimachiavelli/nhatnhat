<?php get_header(); ?>

		<ol id="home-work" role="main">

		
		<?php 
            if ( have_posts() ) {
                $number = 1;
				while ( have_posts() ) { 
					the_post();

                    $count_posts = wp_count_posts();
                    $published_posts = $count_posts->publish;
                    $number++;

                    $post_number = $number - $published_posts;


		?>				
                <li class="post first">
                    <article>
                        <header>
                            <hgroup>
                                <h1 class="title"><span class="post-number"><?php echo $post_number; ?></span> <?php the_title(); ?> </h1>
                            </hgroup>
                        </header>
                        <aside class="media">
                            <figure class="viewing">
                                <?php the_post_thumbnail(); ?>
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
                                        <li>
                                            <a href="#">1</a>
                                            <figure class="hidden-content">
                                                <iframe src="http://player.vimeo.com/video/59651338?portrait=0" width="100%" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                                <figcaption>assinvelit quas aut ut doluptatur sunt laut quatur a</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                            <figure class="hidden-content">
                                                <iframe src="http://player.vimeo.com/video/59651338?portrait=0" width="100%" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                                <figcaption>assinvelit quas aut ut doluptatur sunt laut quatur a</figcaption>
                                            </figure>
                                        </li>
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
