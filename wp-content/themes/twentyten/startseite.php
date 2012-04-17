<?php
/**
 * Template Name: startseite
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
			
			<div id="menuz" class="ez"><span class="latest"><a href="/latest">latest</a></span> <span class="line">//</span> <span class="tearsheets"><a href="/category/tearsheets">tearsheets</a> </span><span class="line">//</span><span class="kunstblut"><a href="/category/personal-kunstblut"><span class="personal">personal</span>: kunstblut</a></span><span class="line">/</span> <span class="pfr"><a href="/category/punkfuckinrock">punkfuckinrock</a></span><br/>
			<span class="cooperate"><a href="/category/corporate-publishing">corporate publishing</a></span> <span class="line">//</span> <span class="journalism"><a href="/category/photo-journalism">photo journalism</a></span><br/>
			
			<span class="blog"><a href="http://danielpeter.tumblr.com ">blog</a></span><span class="line">//</span> <span class="about"><a href="/about">about</a></span></div>
		</div>
		<div id="social_media">
		<ul>
			 <div class="fb-like" data-href="http://danielpeter.net" data-send="false" data-layout="button_count" data-width="40" data-show-faces="false" data-font="arial"></div>
			<li><a href="http://facebook.com/danielpeterfotografie"><img width="34px" src="<?php echo get_stylesheet_directory_uri();?>/images/fb-icon.png"/></a></li>
			<li><a href="http://twitter.com/danielpeterfoto"><img width="34px" src="<?php echo get_stylesheet_directory_uri();?>/images/tw-icon.png"/></a></li>
			<li><a href="http://flickr.com/photos/danielpeterfotografie/"><img width="34px" src="<?php echo get_stylesheet_directory_uri();?>/images/fl-icon.png"/></a></li>
		</ul>
		</div>
		<div id="container" class="one-column">
			<div id="content" role="main">

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
