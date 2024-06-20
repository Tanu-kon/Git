<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="left_side_content">
					<?php echo get_field("banner_left_side_content") ;?>
					<img src="<?php echo get_field("banner_left_side_image") ;?>" alt="play_store" class="play_store img-fluid" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="right_side_img">
					<img src="<?php echo get_field("banner_right_side_image") ;?>" alt="mob_img" class="mob_img img-fluid" />	
				</div>
			</div>
		</div>
	</div>	
</section>

<section class="our_features">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="our_features_heading bottom_line"><?php echo get_field("title") ;?></h2>
			</div>
			<div class="col-md-6">
				<div class="feature_left">
					<img src="<?php echo get_field("image") ;?>"alt="our_feature_left" class="our_feature_left img-fluid" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="feature_right">
					<ul>
						<?php if( have_rows('features_listing') ):
						while( have_rows('features_listing') ) : the_row();
						$heading = get_sub_field('feature_heading');
						$description = get_sub_field('feature_description');
						?>
						
						<li class="feature_right_inner heart_sec">
							<h4 class="feature_heading"><?php echo $heading; ?></h4>
							<p class="feature_para"><?php echo $description; ?></p>
						</li>
						
						<?php endwhile;
						endif ;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="quite_section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="quite_left">
					<h3 class="quite_heading bottom_line"><?php echo get_field("left_side_title") ;?> </h3>
					<?php echo get_field("left_side_content") ;?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="quite_right">
					<img src="<?php echo get_field("right_side_image") ;?>" alt="quit_right_mob" class="quit_right_mob img-fluid" />
				</div>
			</div>
		</div>
	</div>
</section>

<section class="app_screenshot">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="app_screen_heading bottom_line"><?php echo get_field("app_screenshots_title") ;?></h2>
			</div>
			<div class="col-md-6">
				<div class="screen_left">
					<img src="<?php echo get_field("app_screenshots_left_image") ;?>" alt="app_screenshot_left" class="app_screenshot_left img-fluid" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="screen_right">
					<img src="<?php echo get_field("app_screenshots_right_image") ;?>" alt="app_screenshot_right" class="app_screenshot_right img-fluid" />
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>