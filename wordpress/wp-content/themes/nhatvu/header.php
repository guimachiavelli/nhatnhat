<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 <?php echo print_classes(); ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 <?php echo print_classes(); ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 <?php echo print_classes(); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js <?php echo print_classes(); ?>"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="">

		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

		<script src="<?php echo TEMPLATE_URL; ?>/js/libs/modernizr.js"></script>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
	</head>



<body>

		<header id="intro" role="banner">
			<a href="<?php echo SITE_URL; ?>">
				<hgroup>
					<h1 class="name written"><b class="nhat">Nhat</b> <b class="dash">–</b> <b class="vu">Vu</b> <b class="dang">Dang</b></h1>
					<h2 class="name pronunciation"><b class="nhat">(Njutt)</b> <b class="vu">(Foo)</b> <b class="dang">(Dang)</b></h2>
				</hgroup>
			</a>
		</header>

		<nav id="top-bar" role="navigation">
			<h1 class="outline">Menu</h1>
			<ul>
				<li class="nav-link work <?php if ( is_home() ) { ?> active<?php } ?>"><a href="<?php echo SITE_URL; ?>">Work</a></li>
				<li class="nav-link about <?php if ( is_page('about') ) { ?> active<?php } ?>"><a href="<?php echo print_page_permalink('about'); ?>">About</a></li>
				<li class="nav-link follow <?php if ( is_post_type_archive('news') ) { ?> active<?php } ?>"><a href="<?php echo get_post_type_archive_link('news'); ?>">News</a></li>
				<li class="nav-link contact <?php if ( is_page('contact') ) { ?> active<?php } ?>"><a href="<?php echo print_page_permalink('contact'); ?>">Contact</a></li>
			</ul>
		</nav>
