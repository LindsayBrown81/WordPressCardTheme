<?php
/**
 * The header for Inthenews theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inthenews
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); 
// var_dump($_SERVER); Also, body_class allows for HTML within it to be inspectable with Dev Tools in the browser
?>>

<!-- <div id="page" class="site"> -->
    <!-- <div class="site-inner"> -->
    <h1 class="open"><a class='current' href="<?php bloginfo( 'url'); ?>"></a></h1>
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'inthenews' ); ?></a>
        
		<header class="navbar-fixed-top bg-faded">
			<nav class="navbar navbar-dark text-uppercase">
				<a href="https://getbabyscripts.com/index.html">
                    <img id="header-logo" src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="Babyscripts logo">
                </a>
				<button class="navbar-toggler hidden-lg-up collapsed pull-xs-right header-btn" type="button"
                data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">
		            ☰
		        </button>
		        <a class="btn btn-lg btn-primary pull-sm-right hidden-xs-down header-btn font-weight-bold"
		           href="https://getbabyscripts.com/index.html#schedule-a-demo">Schedule a Demo</a>

		        <div class="clearfix hidden-lg-up"></div>
		        <div class="collapse navbar-toggleable-md text-lg-center" id="navbar-header">
		            <ul class="nav navbar-nav">
		                <li class="nav-item">
		                    <a class="nav-link" href="https://getbabyscripts.com/solution.html">Our Solution</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link" href="https://getbabyscripts.com/customers.html">Customers</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link" href="https://getbabyscripts.com/research.html">Research</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link" href="https://getbabyscripts.com/about.html">About Us</a>
		                </li>
		                <li class="nav-item active">
		                    <a class="nav-link" href="inthenews.html">In the News<span class="sr-only"></span></a>
		                </li>
		            </ul>
		        </div>
    		</nav>
		</header>
		<!-- Banner
        ================================================== -->
        <div class="jumbotron inthenews red-border border-bottom text-xs-center">
            <div class="container">
                <h1 class="display-1 text-uppercase bold-heading">In the News</h1>
            </div>
        </div>
        <!-- /.Banner -->

        <!--  messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        
        <div class="container"><!--previously container, container section-->
            <div class="icons-container">
                <!--*******^^^^^^ BUTTON-LIKE ICONS HERE ^^^^^^^*******-->
                <div class="col-md-5ths col-md-3-20 icbutton" data-id="In-the-News">
                    <figure class="ic-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_recent_actors_black_24dp/web/ic_recent_actors_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3">
                        <figcaption class="ic-figcaption">In the News<br>&nbsp;</figcaption>
                    </figure>
                </div>

                <div class="col-md-5ths col-md-3-20 icbutton" data-id="Blog">
                    <figure class="ic-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_message_black_24dp/web/ic_message_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3">
                        <figcaption class="ic-figcaption">Blog<br>&nbsp;</figcaption>
                    </figure>
                </div>

                <div class="col-md-5ths col-md-3-20 icbutton" data-id="Research">
                    <figure class="ic-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_timeline_black_24dp/web/ic_timeline_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3">
                        <figcaption class="ic-figcaption">Research<br>&nbsp;</figcaption>
                    </figure>
                </div>

                <div class="col-md-5ths col-md-3-20 icbutton" data-id="Press-Release">
                    <figure class="ic-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_art_track_black_24dp/web/ic_art_track_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3">
                        <figcaption class="ic-figcaption">Press Release<br>&nbsp;</figcaption>
                    </figure>
                </div>

                <div class="col-md-5ths col-md-3-20 icbutton" data-id="Video">
                    <figure class="ic-figure">
                        <img src="<?php bloginfo('template_directory'); ?>/material-icons/ic_videocam_black_24dp/web/ic_videocam_black_24dp_2x.png" alt="small, simple icon" class="img-responsive opacity-3">
                        <figcaption class="ic-figcaption">Video<br>&nbsp;</figcaption>
                    </figure>
                </div>
            
            </div><!--closes class "icons-container row"-->
        </div><!--closes class="container"-->


        <div class="featurette-inthenews">
            <div id="content" class="primary news-container row">
