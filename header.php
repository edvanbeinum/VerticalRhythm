<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<title><?php if ( $request->display_entry ) {
		echo "{$post->title} - ";
	} ?><?php echo $site_title ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php Site::out_path( 'theme' ); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php Site::out_path( 'theme' ); ?>/apple-touch-icon.png">

	<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol"
		  href="<?php URL::out( 'atompub_servicedocument' ); ?>"/>
	<link rel="alternate" type="application/atom+xml" title="Atom" href="<?php $theme->feed_alternate(); ?>"/>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>"/>

	<link href="http://fonts.googleapis.com/css?family=Arvo:400" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php Site::out_path( 'theme' ); ?>/css/style.css">


	<script src="<?php Site::out_path( 'theme' ); ?>/js/libs/modernizr-1.7.min.js"></script>
	<script src='<?php Site::out_path( 'theme' ); ?>/js/libs/respond.min.js'></script>
</head>

<body>

<div id="container" class="<?php echo $page_class ?>">
	<div id="gs-overlay">&nbsp;</div>

	<header>

		<div id="logo">
			<h1><a href="<?php Site::out_url( 'habari' ); ?>">EvB</a></h1>
		</div>
		<div id="tail"></div>
		<div class="links">
			<?php  foreach ( $all_pages as $page ) : ?>
				<p><a href="/<?php echo $page->slug ?> "><?php echo $page->title ?></a></p>
			<?php endforeach; ?>
			<?php if ( !$request->display_home ) : ?>
			<hr/>
			<p><a href="/">&larr; All posts </a></p>

			<?php endif; ?>

		</div>

	</header>
