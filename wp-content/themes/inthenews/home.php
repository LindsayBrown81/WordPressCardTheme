<?php
/**
 * home.php – If WordPress cannot find front-page.php and “your latest posts” is set in the front page displays section, it will look for home.php. 
 * Additionally, WordPress will look for this file when the posts page is set in the front page displays section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inthenews
 */

get_header(); ?>


<?php
	// Start the loop
	while ( have_posts() ) : the_post();
?>

	<?php the_content(); ?> <!-- a template tag that fetches the content from the database and display it. -->
	
	<?php
		if( function_exists('get_field') ){ 
			if( get_field('externalURL') ){ 
	?>					
	<article class="entry-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				
			<!-- ********** BEGIN NEWSCARD ********** -->
			<div class="col-lg-4 col-md-6">
				<!-- ********** EXTERNAL URL THAT WRAPS NEWSCARD ********** -->
				<a class="news-box" data-category="<?php the_field('category_name'); ?>" href="<?php the_field('externalURL'); ?>" target="_blank">
					<section>
						<!-- ********** CATEGORY HEADER ********** -->
						<figure class="news-box-header">
							<?php if( get_field('category_name') == 'In-the-News' ) { ?>
								<img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_recent_actors_black_24dp/web/ic_recent_actors_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3" /> 
							
							<?php } elseif ( get_field('category_name') == 'Blog' ){ ?>
								<img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_message_black_24dp/web/ic_message_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3" />
							
							<?php } elseif ( get_field('category_name') == 'Press-Release' ){ ?>
								<img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_art_track_black_24dp/web/ic_art_track_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3" />
							
							<?php } elseif ( get_field('category_name') == 'Research' ){ ?>
								<img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_timeline_black_24dp/web/ic_timeline_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3" />
							
							<?php } elseif ( get_field('category_name') == 'Video' ){ ?>
								<img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_videocam_black_24dp/web/ic_videocam_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3" />
							
							<?php } else { ?><img src="<?php bloginfo('template_directory')?>/material-icons/ic_recent_actors_black_24dp/web/ic_recent_actors_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3">
							
							<?php } ?>
							<!-- ********** CATEGORY NAME PRINTED OUT ********** -->
							<figcaption class="news-box-header"><?php the_field('category_name'); ?></figcaption>
							
						</figure>
						<!-- ********** PUBLISH DATE ********** -->
						<time>
						<?php $date = get_field('publication_date');
						$date_spelled_out = date("F j, Y", strtotime($date)); ?>

						<?php echo $date_spelled_out; ?>
						</time>
						<!--********** PUBLISHER **********--><!--********** ARTICLE TITLE ********** -->
			            <h6><span class="publisher bold-heading"><?php the_field('publisher'); ?></span><span class="title"><?php the_title(); ?></span></h6><br/>
			            <!--********** IMAGE FILE PATH AND NAME ********** -->
			            <picture><img src="<?php the_field('image'); ?>" alt="image from publisher's website" class="image img-responsive"></picture>  
			        </section>
				</a>

			</div>	

			<!-- close conditional test wrapper function -->
			<?php } 
		} ?>

	</article><!-- #post-## -->	
	<!-- The article element has an ID that uses the the_ID() template tag to fetch the ID of the post, and a class that’s defined using the post_class() template tag. This gives it a class that includes the ID of the post, the post type, taxonomies and more. -->

<!-- End of the loop. -->
<?php endwhile; ?>
<div class="clearfix hidden-sm-down hidden-md-up hidden-lg-up"></div>

<?php get_footer(); ?>
