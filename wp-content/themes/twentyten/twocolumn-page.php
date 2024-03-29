<?php
/**
 * Template Name: Two column, e.g. about
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		<div id="container" class="two-column">
			<div id="content3" class="ez" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
						<div id="sidebar2" class="ez about">
						<?php require_once('text_about.php');?>
			</div>
		</div><!-- #container -->

<?php get_footer(); ?>
