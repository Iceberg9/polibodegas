<!DOCTYPE>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/ios-57.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/assets/images/ios-76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/images/ios-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/assets/images/ios-152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/images/ios-180.png">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	
	<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	<?php wp_head(); ?> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>?v=01">
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/code.js"></script>
</head>
<body>

<?php get_template_part('library/header-mobile'); ?>
<?php get_template_part('library/header-desk'); ?>