<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div>
</div>

<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php the_field('footer_logo', 'option'); ?>" alt="footer_logo" class="footer_logo img-fluid" /></a>
				<p class="footer_para"><?php the_field('footer_content', 'option'); ?></p>
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<div class="footer_points">
					<h3 class="bottom_line footer_text"><?php the_field('first_footer_menu_title', 'option'); ?></h3>
					<?php 
						wp_nav_menu(array(
						'menu' => 'Footer Menu 1' 
						));
					?>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-12">
				<div class="footer_points">
					<h3 class="bottom_line footer_text"><?php the_field('second_footer_menu_title', 'option'); ?></h3>
					<?php 
						wp_nav_menu(array(
						'menu' => 'Footer Menu 2' 
						));
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<footer class="copy_right_sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h3><?php the_field('footer_copyright', 'option'); ?></h3>
			</div>
		</div>
	</div>	
</footer>

<!-----------Script files------------>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	

<script type="text/javascript">
	jQuery(document).ready(function() {
			jQuery('.feature_right_inner').each(function() {
				var tis = jQuery(this), state = false, answer = tis.next('.feature_para').slideUp('slow');
				tis.click(function() {	
					state = !state;
					answer.slideToggle(state);
					tis.toggleClass('active',state);
				});
			});
		});
</script>

<?php wp_footer(); ?>

</body>
</html>
