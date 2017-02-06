<?php
/**
 * The template part for displaying single posts. Contains the content, whereas the framework is contained in single-newscards.php (conventionally named content-single.php when not a custom post type).
 *
 * @package WordPress
 * @subpackage In_the_News
 * @since In the News 1.0
 */
?>
<!-- https://www.lynda.com/WordPress-tutorials/Creating-custom-post-type-index-page/163113/173950-4.html Instructs to copy from parent theme and change file name -->

<!-- https://premium.wpmudev.org/blog/the-wordpress-loop-explained/?nhtz=b&utm_expid=3606929-91.15T0nlf8TFCqo1W_BlZjGg.1&utm_campaign=Roost&utm_source=Roost&utm_medium=push&utm_referrer=https%3A%2F%2Fpremium.wpmudev.org%2Fblog%2F%3Froost%3Dtrue%26roost_action%3Dload%26noteID%3D57775686%26sendID%3D2487%26body%3DThe%2520WordPress%2520Loop%2520Explained

The article element has an ID that uses the the_ID() template tag to fetch the ID of the post, and a class that’s defined using the post_class() template tag. This gives it a class that includes the ID of the post, the post type, taxonomies and more. ~ but I did not define a class for my custom post type newscard. Does this work on it? -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?><p>content-page.php. ln 17.</p>		
	</header><!-- .entry-header -->

	<!-- <?php //inthenews_excerpt(); ?>

	<?php //inthenews_post_thumbnail(); ?> -->
	
	<!-- per premium above, WordPress Loop will output the post’s content, with these lines: -->
	<div class="entry-content"><p>content-newscard.php - after 1st entry-content opening tag</p>
		<?php the_content(); ?> <!--a template tag that fetches the content from the database and display it.-->
		<!-- ACF fields should display directly after the_content. says Lynda, but I want my fields to display within the content-->

		<!-- code per vid on https://www.lynda.com/WordPress-tutorials/Caveats-using-ACF/169877/183134-4.html. -->
		<?php
		if( function_exists('get_field') ){ // wrap all functions for ACF in this conditional statement that tests for get_field function (if not present, then ACF plugin is disabled or broken due to needing version updating or something else)
			if( get_field('news-box_content') ){ // newscard_content or news-box_content? where did I define either? Should this be a single custom field instead? Find earlier Lynda vid that explains.
	 		?>					
							
			<!-- ********** CARD **********  ~ Do I need to define these functions earlier in this template file?  or maybe in some other file? ~ -->
			<div class="news-box col-lg-4 col-md-6">  
				<!-- ********** EXTERNAL URL THAT WRAPS THE NEWSCARD. WHEN USER CLICKS ON NEWSCARD, OPEN NEW TAB AND DIRECT THERE -->
				<a href="<?php the_field('externalURL'); ?>" target="_blank">
					<section class="news-box" data-category="in-the-news"> get category 
						
						<!-- ********** CATEGORY HEADER ********** Perhaps make 5 custom post types, make admin users pick from menu -->
						<figure class="news-box-header">
							<?php the_field('inthenews_term_avatar'); 
							echo '<pre>' . print_r(the_field('inthenews_term_avatar'), true) . '</pre>'; ?>
							<!-- if the above fails, try this -->
							<!-- <img src="<?php bloginfo('template_directory')?>/images/material-icons/ic_recent_actors_black_24dp/web/ic_recent_actors_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3"> -->

							<!-- How difficult would it be to make a conditional statement that says, if category is such-and-such, then print that category to screen? (or I could buy ACF Pro plugin)

							Maybe use something like $category = apply_filters( 'cat_filter', 'filter me', $arg1, $arg2 );

							Would that logic be run by jQuery?

							Would I still need my data-category attribute and val?

							 -->
							<!-- ********** CATEGORY NAME PRINTED OUT ********** -->
							<figcaption class="news-box-header"><?php the_field('category-text'); ?></figcaption>
							<!-- if the above fails, try replacing w php the_terms( $post->ID, 'category', 'categories: ', ' / ' );
							OR just this: <?php //the_category( ' ' ); ?> -->
						</figure>
						<!-- ********** PUBLISH DATE ********** -->				
						<!-- <?php //the_field('publication_date'); ?>' -->
						<time class="datetime" datetime="<?php the_field('publication_date'); ?>"></time>
						<!--********** PUBLISHER **********-->     <!--********** ARTICLE TITLE **********-->
			            <h6><span class="publisher bold-heading"><?php the_field('publisher'); ?></span><span class="title"><?php the_field('article_title'); ?></span></h6><br/>
			            <!--********** IMAGE FILE PATH AND NAME **********-->
			            <!-- <picture><?php //the_field('image'); ?></picture>  -->
			            <picture><img src="<?php the_field('image'); ?>" alt="image from publisher's website" class="image img-responsive img-center"></picture>  
			        </section>

				</a>

			</div>	
			
			<!-- close the conditional test wrapper function -->
			<?php 
			} 
		}
		?>
		
				<!--********** CATEGORY lowercase (with hyphen if multi-word) for data **********-->
				<section class="category news-box"><!-- not necessary or possibly not even allowed to add category as custom field in Importer OK? add as class here OK? Not OK to add as a taxonomy term bc its reserved. Do I do so anywhere?-->
					
					<!-- make a heading with image and displayed category name for each category Try <p?hp get_image(); ?>-->
					<figure class="news-box-header"><?php the_field('_newscard-heading'); ?>
		<!-- WRONG!!!<img class="image" src="<?php the_field(); ?>" alt="small, simple icon" class="img-responsive opacity-3">" -->
						<!-- <img class="image" src="/../material-icons/ic_message_black_24dp/web/ic_message_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3"> -->
						<img src="<?php bloginfo('template_directory'); ?>/images/material-icons/ic_message_black_24dp/web/ic_message_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3">
						<!--********** DISPLAY CATEGORY NAME **********-->
			            <figcaption class="category news-box-header"><?php the_field('category'); ?></figcaption>
		            </figure>
		            <!--********** PUBLISH DATE **********-->
		            <time class="datetime" datetime="<?php the_field('publication_date'); ?>"></time>
		            <!--********** PUBLISHER **********-->     <!--********** ARTICLE TITLE **********-->
		            <h6><span class="publisher bold-heading"><?php the_field('publisher'); ?></span><span class="title"><?php the_field('article_title'); ?></span></h6><br/>
		            <!--********** IMAGE FILE PATH AND NAME **********-->
		            <picture><img src="<?php the_field('image'); ?>" alt="image from publisher's website" class="image img-responsive img-center"></picture>   
				</section>
			</a></div><!-- closes externalURL -->
		</div><!-- closes Bootstrap column wrapper -->

		<div class="clearfix hidden-sm-down hidden-md-up hidden-lg-up"></div>	
	
	<!-- </div> --><!-- .entry-content -->

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