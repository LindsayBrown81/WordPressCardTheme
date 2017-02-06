<?php 
/**
 * The template part for displaying single posts. Contains the content, whereas the framework is contained in single-newscards.php (conventionally named content-single.php when not a custom post type).
 *
 * @package WordPress
 * @subpackage In_the_News
 * @since In the News 1.0
 */
?>

<?php the_content(); ?> 		
			
	<?php
		if( function_exists('get_field') ){ 
			if( get_field('externalURL') ){ 
	?>					
	<article class="entry-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>				
			<!-- ********** BEGIN CARD ********** -->
			<div class="col-lg-4 col-md-6">
				<!-- ********** EXTERNAL URL THAT WRAPS THE NEWSCARD ********** -->
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
							
							<?php } else { ?><!-- <img src="<?php //bloginfo('template_directory')?>/material-icons/ic_recent_actors_black_24dp/web/ic_recent_actors_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3"> -->
							
							<?php } ?>

							<!-- ********** CATEGORY NAME PRINTED OUT ********** -->
							<figcaption class="news-box-header"><?php the_field('category_name'); ?></figcaption>
							
						</figure>
						<!-- ********** PUBLISH DATE data-field_key="field_
						58328c690336b" 
						58328c690336b
						sort by meta_key publication_date 's meta_value 
						(ex of meta_val is 20161125) ********** -->
						<time>
						<?php $date = get_field('publication_date');
						$date_spelled_out = date("F j, Y", strtotime($date)); ?>

						<?php echo $date_spelled_out; ?>
						</time>
						<!--********** PUBLISHER **********--><!--********** ARTICLE TITLE ********** 11/19/16 Dash rec'd use the_title, not article_title -->
			            <h6><span class="publisher bold-heading"><?php the_field('publisher'); ?></span><span class="title"><?php the_title(); ?></span></h6><br/>
			            <!--********** IMAGE FILE PATH AND NAME **********-->
			            <picture><img src="<?php the_field('image'); ?>" alt="image from publisher's website" class="image img-responsive contain"></picture>  
			        </section>
				</a>

			</div>	

			<!-- close conditional test wrapper function -->
			<?php } 
		} ?>

	</article><!-- #post-## -->	

	<footer class="entry-footer">
		<?php inthenews_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'inthenews' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<!-- </div> --><!-- #content -->
<!-- </div> --><!-- #primary -->	