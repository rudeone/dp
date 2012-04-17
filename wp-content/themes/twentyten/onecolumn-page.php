<?php
/**
 * Template Name: One column, no sidebar
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

get_header(); 
$image = get_post_meta($post->ID, 'image', true);
?>

				<?php #wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		<div id="navnav" class="cufon">
			<div class="topmenu ez">Daniel Peter <strong>Photography</strong></div>
			<div id="menuz" class="ez"><a href="/latest">latest</a> // <a href="/category/tearsheets">tearsheets</a> // <a href="/category/personal-kunstblut">personal: kunstblut</a> / <a href="/category/punkfuckinrock">punkfuckinrock</a><br/>
			
			<a href="/category/commercial">commercial</a> // <a href="/category/photo-journalism">photo journalism</a><br/>
			
			<a href="/">blog</a> // <a href="/about">about</a></div>
		</div>
		<div id="container" class="one-column">
			<div id="content" role="main"">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
