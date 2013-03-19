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
                                <?php the_post_thumbnail('full'); ?>
                                <figcaption><?php echo print_feature_caption($post->ID); ?></figcaption>
                            </figure>
                            <nav class="media-nav">
							    <div class="media-module images active">
								    <h1>Images</h1>
                                    <ol>
                                        <?php print_all_images($post->ID); ?>
                                    </ol>
                                </div>
                                <?php 
                                    $video_1 = get_post_meta($post->ID, 'video_code_1', true);
                                    $video_2 = get_post_meta($post->ID, 'video_code_2', true);
                                    $video_3 = get_post_meta($post->ID, 'video_code_3', true);
									$video_4 = get_post_meta($post->ID, 'video_code_4', true);
                                    $video_5 = get_post_meta($post->ID, 'video_code_5', true);
                                    $video_6 = get_post_meta($post->ID, 'video_code_6', true);
                                    $video_7 = get_post_meta($post->ID, 'video_code_7', true);
									$video_8 = get_post_meta($post->ID, 'video_code_8', true);
                                    $video_9 = get_post_meta($post->ID, 'video_code_9', true);
                                    $video_10 = get_post_meta($post->ID, 'video_code_10', true);
                                    $video_11 = get_post_meta($post->ID, 'video_code_11', true);
                                    $video_12 = get_post_meta($post->ID, 'video_code_12', true);

                                    $video_array = array($video_1, $video_2, $video_3, $video_4,$video_5, $video_6, $video_7, $video_8,$video_9, $video_10, $video_11, $video_12);
                                ?>
                                <div class="media-module videos inactive">
                                    <h1>Videos</h1>
                                    <ol>
                                        <?php
											$i = 0;
											$y = 0;
                                            while($i < 13) {
												if ($video_array[$i] != '') {
													$y++;
                                                    echo '
														<li class="video_'. $y .'">
                                                            <a href="#">' . $y . '</a>
                                                            <figure class="hidden-content">
                                                                <iframe src="http://player.vimeo.com/video/' . $video_array[$i] . '?portrait=0" width="100%" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                                            </figure>
                                                        </li>';
                                                }
                                                $i++;
                                            }
                                        ?>
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
