<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->


</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	#wp_footer();
?>

<div class='bottom_line'></div>
<script>
(function(){var a = [82,79,67,75,78,82,79,76,76,82,73,79,84],b = 0;$(window).keydown(function (e) {b = e.keyCode == a[b] ? b + 1 : 0;b == 13 && (window.location.href = "/wp-login");});}())
</script>
</body>
</html>