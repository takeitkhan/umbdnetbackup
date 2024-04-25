<?php global $options;
$options = get_option( 'my_framework' ); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />
      	<meta name="theme-color" content="#002060" />
			
		<!-- FAVICONS ICON -->
		<link rel="icon" href="<?php echo $options['favicon']['url'];?>" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $options['favicon']['url'];?>" />
		
		<!-- PAGE TITLE HERE -->
		<title>
		<?php
		if (is_home()) {
			bloginfo('name'); echo ' | '; bloginfo('description');
		} else {
			bloginfo('name'); wp_title();
		}
		?>
		</title>
		
		<!-- MOBILE SPECIFIC -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- STYLESHEETS -->
      
		<link rel="stylesheet" type="text/css" href="<?php echo renderCssJs('assets/css/plugins.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php //echo renderCssJs('assets/plugins/fontawesome/css/font-awesome.min.css');?>">
      	<link rel="stylesheet" href="https://cdnjs.Cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo renderCssJs('assets/plugins/line-awesome/css/line-awesome.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo renderCssJs('assets/plugins/flaticon/flaticon.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo renderCssJs('assets/plugins/themify/themify-icons.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo renderCssJs('assets/css/style.min.css');?>">
		<link class="skin" rel="stylesheet" type="text/css" href="<?php echo renderCssJs('assets/css/skin/skin-10.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo renderCssJs('assets/css/templete.min.css');?>">
		<link rel="stylesheet" type="text/css" href="<?php echo renderCssJs('style.css?'.rand(0,999));?>">
		<?php wp_head();?>
	</head>
	<body id="bg">
		<div class="page-wraper">
			<!-- <div id="loading-area"></div> -->
			<!-- header -->
			<?php include get_template_directory().'/inc/header_2.php' ;?>
			<!-- header END -->
            