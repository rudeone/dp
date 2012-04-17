<?php
/**
 * Template Name: Latest
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

<?php 
#query_posts( array( 'cat' => 8, 'paged' => get_query_var('page') ) );

#query_posts( 'cat=3&year=2004' )


// The Query
	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

  function filter_where($where = '') {
    $where .= " AND post_date < '" . date('Y-m-d', strtotime('-90 days')) . "'";
    return $where;
  }
	add_filter('posts_where', 'filter_where');
	query_posts( array(  'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC','paged' => $page ));
    #get_template_part( 'loop', 'single' );
// The Loop
	?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php 
$image = get_post_meta($post->ID, 'image', true);

?>
<div id="container">
			<div id="content2" role="main">

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
					
						<?php  the_content(); ?>
						<?php #wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

					<div class="entry-utility">
						<?php #twentyten_posted_in(); ?>
						<?php #edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->


				<?php #comments_template( '', true ); ?>
		</div><!-- #container -->
			<div id="sidebar2" class="ez">
				<div class="navi">
					<?php 

					$link = '<img src="'.get_stylesheet_directory_uri().'/images/arrow-left.png"/>'; 
					
 					if (get_previous_posts_link())
						previous_posts_link($link); 
					else 
 						echo '<img src="'.get_stylesheet_directory_uri().'/images/arrow-left-o.jpg"/>';
 						 
					$link = '<img src="'.get_stylesheet_directory_uri().'/images/arrow-right.png"/>'; 
					
					if (get_next_posts_link())
 						next_posts_link($link); 
					else
 						echo '<img src="'.get_stylesheet_directory_uri().'/images/arrow-right-o.jpg"/>'; 
					?>
				</div>
			</div>
<div class="middle cufon ez">
		
				<p class="home"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Daniel Peter // <br/>
					<b><span style="font-weight:bold;">Photography</span></b></a>
					</p><p class="info">
					
					
					<?php
		
						echo get_the_category_list( ', ' );
						
					?>
					<br/>
					<?php
					the_title(); 
					?>
					<br/>
					<?php
						$suchwort = get_post_custom_values('custom');
						if(!(empty($suchwort))) { ?> <?php echo $suchwort[0]." "; ?><?php }						
					
						$suchwort2 = get_post_custom_values('year');
						if(!(empty($suchwort2))) { 
							if(!(empty($suchwort))) { 
								echo "| ";
							}
						?> <?php echo $suchwort2[0]; ?><?php 
						}						
											?>
					</p><p class="links blend">
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Home</a> 
						| 
						<a href="<?php echo $_SERVER['HOST'];?>/about">About</a>
					</p>
				</div>		
			</div>

<?php get_footer(); ?>
<?php endwhile; // end of the loop. 

else
echo "no articles in this category yet";
?>
    
