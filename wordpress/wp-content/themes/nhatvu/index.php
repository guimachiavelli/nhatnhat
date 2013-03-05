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
