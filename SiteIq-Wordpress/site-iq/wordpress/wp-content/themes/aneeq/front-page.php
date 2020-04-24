<?php get_header(); 
	/***
	* Load Aneeq Theme Option Setting
	*/
	$aneeq_slider_section = get_theme_mod('aneeq_slider_section', 'inactive');
	$aneeq_service_section = get_theme_mod('aneeq_service_section', 'inactive');
	$aneeq_woocommerce_section = get_theme_mod('aneeq_woocommerce_section', 'inactive');
	$aneeq_blog_section = get_theme_mod('aneeq_blog_section', 'inactive');
	$aneeq_testimonial_section = get_theme_mod('aneeq_testimonial_section', 'inactive');
	//static page setting
	$aneeq_static_page_setting = get_theme_mod('aneeq_static_page_setting', 'active');

	if ( $aneeq_slider_section == "active" ) { get_template_part('index-slider'); }
	if ( $aneeq_service_section == "active" ) { get_template_part('index-service'); }
	if ( $aneeq_woocommerce_section == "active" ) { get_template_part('index-wooproduct'); }
	if ( $aneeq_blog_section == "active" ) { get_template_part('index-blog'); }
	if ( $aneeq_testimonial_section == "active" ) { get_template_part('index-testimonial'); }
	//for breadcrumb
	if ( $aneeq_service_section == "inactive" && $aneeq_slider_section == "inactive" && $aneeq_woocommerce_section == "inactive" 
		&& $aneeq_testimonial_section == "inactive" && $aneeq_blog_section == "inactive"  ){
			get_template_part('breadcrumb'); 
		}
	?>
	<?php if($aneeq_static_page_setting == 'active') { ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<section class="content right_sidebar">
			<div class="container">
				<div class="row">
					<?php
					// Intialize Variable
					$aneeq_layout_style = "col-md-12 col-sm-12 col-xs-12";
					$aneeq_page_layout_style = get_theme_mod('aneeq_page_layout_style', 'rightsidebar') ;
					
					// Check Sidebar Column Condition
					if( $aneeq_page_layout_style == "rightsidebar" || $aneeq_page_layout_style == "leftsidebar" && is_active_sidebar( 'sidebar-widget' )  ) {
						$aneeq_layout_style = "col-md-8 col-sm-6 col-xs-12";
					}
					?>
					<?php if($aneeq_page_layout_style == "leftsidebar") { ?>
						<?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
							<!--Sidebar Widget-->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="sidebar">
									<?php dynamic_sidebar('sidebar-widget') ?>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
					<div class="<?php echo esc_attr($aneeq_layout_style); ?>">
						<div class="blog_large">
							<?php
							if(have_posts()) :
								while (have_posts()) : the_post();
									$aneeq_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 				
									?>
									<article class="post">	
										<?php if($aneeq_url != NULL) {  ?>
											<figure class="post_img">
												<a href="<?php esc_url(the_permalink()); ?>">
													<?php the_post_thumbnail('full');  ?>
												</a>
											</figure>
										<?php } ?>
										<div class="post_date">
											<span class="day"><?php echo get_the_date('j'); ?></span>
											<span class="month"><?php echo get_the_date('M'); ?></span>
										</div>
										<div class="post_content">
											<div class="post_meta">
												<h2>
													<a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
												</h2>
												<div class="metaInfo">
													<span><i class="fa fa-user"></i> <?php esc_html_e('By', 'aneeq') ?> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a> </span>
													<?php if (has_category()) : ?>	
														<span><i class="fa fa-th-list"></i>
															<a href="#"><?php the_category('&nbsp;,&nbsp');?></a> 
														</span>
													<?php endif; ?>
												</div>
											</div>
											<p><?php the_content();	?></p>
										</div>
									</article>
									<?php 	
								endwhile;
							endif;
							// Reset Post Data
							wp_reset_postdata();
							?>
						</div>
						<div style="text-align: center;" class="col-lg-12 col-md-12 col-sm-12">
							<?php 	
								the_posts_pagination( array(
									'type'		=> 'list',						
									'mid_size'  => 2,
									'prev_text' => __( 'Back', 'aneeq' ),
									'next_text' => __( 'Next', 'aneeq' ),
								) ); ?>
						</div>
					</div>
					<?php if($aneeq_page_layout_style == "rightsidebar") { ?>
						<?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
							<!--Sidebar Widget-->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="sidebar">
									<?php dynamic_sidebar('sidebar-widget') ?>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</section>
	<?php } ?>
	
	        <?php $hidebox = get_theme_mod('hide_section', '1'); ?>  
             <?php if($hidebox  == '') { ?>
              <?php if(get_theme_mod('page-setting1',true) != '' && get_theme_mod('page-setting2',true) != '' && get_theme_mod('page-setting3',true) != '') { ?>  
             <section id="pagearea">
<div class="container">
  <div class="pagearea-inner">
                       <?php for($f=1; $f<4; $f++) { ?>
         <?php if(get_theme_mod('page-setting'.$f) != '') { ?>
         	<?php $page_query = new WP_Query(array('page_id' => get_theme_mod('page-setting'.$f))); ?>
         		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                          <div class="services-box">
                          		 <div class="thumbbx"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
							<h3><?php the_title(); ?></h3>			
								<?php the_excerpt(); ?>
                                <a class="read-more" href="<?php the_permalink(); ?>"><?php echo esc_attr(get_theme_mod('box_text',__('Read More','foundations')));?></a>
                </div><!-- services-box -->
                <?php endwhile; ?>
                <?php } } ?>
					<div class="clear"></div>
                </div><!-- .pagearea-inner -->
    </div><!-- container-->
</section>
                       <?php } } ?>
	
	
	
	<script>
		//Pagination class add and active class add
		jQuery(document).ready(function(){
			jQuery( "ul.page-numbers" ).addClass( "pagination mrgt-0" );
		});
	</script>
<?php get_footer(); ?>