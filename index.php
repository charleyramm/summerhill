<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- HTML version
Tested in IE6, IE7, IE8, Chrome, IOS Safari
Makes extensive use of the 960 grid system. 
Based on a design by Sam Horwood at One Hundred Rivers

First concieved in HTML5, this version has been adapted for use with earlier browsers. HTML5 elements are replaced by divs and classes.

Charley Ramm, 27 January 2013
charleyramm@gmail.com

~~~
Wordpress theme untested in many browsers. Presumed compatible. 
-->
<title>A.S.Neill's Summerhill School founded in 1921 and still ahead of it's time.</title>

<!-- CSS reset -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" />

<!-- Text styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/text.css" />

<!-- Grid system -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/960.css" />	

<!-- Wordpress image styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wordpress-core.css" />

<!-- Default Wordpress stylesheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />	

<!-- Navigation (left) -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/nav.css" />	

<!-- Asides (right) -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/aside.css" />		

<!-- Other custom styles -->													
<style type="text/css">

body{
	background: #fbf7ef url(<?php bloginfo('stylesheet_directory'); ?>/img/leaves.jpg) repeat-x top;
	padding-top: 60px;
}
.header{
	margin-bottom: 1em;
}

h2#post-701{
	display: none;
}
</style>

<?php wp_head(); ?> 
</head>

<body>
<!--.container_12-->
<div class="container_12">
	<div class="header grid_12"><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/header.jpg" alt="A.S.Neill's Summerhill School founded in 1921 and still ahead of it's time." /></a></div>
		
		<!--.nav-->
		<div class="nav grid_3">
			<?php dynamic_sidebar( 'left' ); ?>
		</div>
		<!--.nav-->
		
		<!--.article (the main body of the page)-->
		<div class="article grid_6">
		
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						        
								<h2 id="post-<?php the_ID(); ?>"> 
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
								<?php the_title(); ?></a> </h2>
								
								<?php the_content();?>
							
								<br style="clear: both;" />
								<fieldset>
								<div><?php edit_post_link(); ?></div>
								<div><?php wp_link_pages(); ?></div>
								<div><?php comments_template(); ?></div>
							</fieldset>
							
							
							

							<hr />				
			<?php endwhile; else: ?>
				<!-- The very first "if" tested to see if there were any Posts to -->
				<!-- display.  This "else" part tells what do if there weren't any. -->
				<h1>Sorry, no posts matched your criteria.</h1>
			<!-- REALLY stop The Loop. -->
			<?php endif; ?>					 

<div style="text-align:center;">
<?php posts_nav_link(' &#183; ', 'previous page', 'next page'); ?>
</div>
		</div>
		<!--.article-->
		
		<!--.aside-->
		<div class="aside grid_3">
			<p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/summerhill-trust.jpg" /></a></p>
			
			<p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/newsletter.jpg" /></a></p>
			
			<blockquote>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/quote-open.jpg" /><br />
				The convention on the Rights of the Child makes particular reference to children's rights to participate in decisions affecting them, and Summerhill, through its very approach to education, embodies this right in a way that surpasses expectations. 
				<br /><br />
				<div class="footer">Paulo David <br /><span>Secretary United Nations Committee on the Rights of the Child</span></div>
			</blockquote>
			
			<!-- Get dynamic sidebar widgets from Wordpress -->
			<?php dynamic_sidebar( 'right' ); ?>

			
		</div>
		<!--.aside-->
	
</div>
<!--.container_12-->
<?php wp_footer(); ?> 
</body>

</html>
