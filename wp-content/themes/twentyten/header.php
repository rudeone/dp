<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php echo '<?xml version="1.0" ?>'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script src="/wp-content/themes/twentyten/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentyten/cufon-yui.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentyten/themix_300-themix_700.font.js" type="text/javascript"></script>
	<script type="text/javascript">
	Cufon.replace('.ez a', {
		hover: true
	}); // Requires a selector engine for IE 6-7, see above
	Cufon.replace('#wrapper .ez'); // Works without a selector engine
	//Cufon.replace('p'); // Requires a selector engine for IE 6-7, see above
			
			//remove width&height & a tags from images
			$(document).ready(function(){
				$(".entry-content img").removeAttr("title");
				$(".entry-content img").removeAttr("height");
				$(".entry-content img").removeAttr("width");
				$(".entry-content img").unwrap();

		
			 });			
				
		</script>

 <?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	#wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="hfeed">

	<div id="main">
