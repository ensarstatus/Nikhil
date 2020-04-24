<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Foundations
 */

get_header(); ?>
<div class="banner-wrapper wow fadeInUp animated" >
<div class="banner-inside-image">
<img src="../site-iq/wordpress/wp-content/themes/aneeq/images/<?php the_post_thumbnail(); ?>">


<div class="banner-caption-inside">

<div class="container">

			 <div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<div class="page_title_one">
						<h2><?php the_title(); ?></h2>
					<p><?php  echo get_post_meta($post->ID,'Caption', true  );?></p>		
					</div>
				</div>
		</div>         
</div>
</div>
</div>
  <div class="main-container">
<div class="content-area">
    <div class="middle-align content_sidebar">
        <div class="site-main" id="sitemain">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php
                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <?php //get_sidebar(); ?>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>