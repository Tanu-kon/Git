<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Advocate Diary</title>
	<?php wp_head(); ?>
	
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Fav.png" sizes="40x40">
		
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
	<!-- Bootstrap CSS End -->
	
	<!-- Custom css files -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">
	<!-- Custom css files ended -->
	
	<!-- font awesome link started here -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- font awesome link ended here -->
	
	<!-- font-family link started here -->
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<!-- font-family link end -->
	
	<!-- jQuery first, then Popper.js, then Bootstrap JS (started) -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS (ended) -->
	
</head>

<body <?php body_class(); ?> <?php generate_do_microdata( 'body' ); ?>>

<header class="top_nav">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar advocates_nav">
  					<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
    					<img src="<?php the_field('logo', 'option'); ?>" alt="Logo" class="logo img-fluid" />
  					</a>
				</nav>
			</div>
		</div>
	</div>
</header>