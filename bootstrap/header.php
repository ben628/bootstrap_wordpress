<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<meta name="description" content="">
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width  initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
<div id="wrapper">
	<header role="banner" class='top'>
		<div id='banner'>
			<h1 class='logo'><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo('name') ); ?>" rel="home"><?php echo esc_attr(get_bloginfo('name')); ?></a></h1>
		</div>
       		<nav class="access" role="navigation"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
	</header>
