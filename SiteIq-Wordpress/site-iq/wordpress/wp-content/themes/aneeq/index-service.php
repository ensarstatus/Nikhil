<!-- service section start -->
	<!--<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="dividerHeading">
						<h2><?php //echo esc_html(get_theme_mod('aneeq_service_section_title', 'Services We Offer')); ?></h2> 
						<p><?php //echo esc_html(get_theme_mod('aneeq_service_section_desc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry')); ?></p>
					</div>
				</div>
			</div>
		</div>
		
		</section>	-->
		
		<style>section.content.right_sidebar {
    display: none;
}</style>
							<?php
echo do_shortcode('[smartslider3 slider=3]');
?>






		<section class="service-section">
		<div class="container">
			<div class="row">
			
			
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=remote-access-block' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>

			</div>
		</div>
		
		</section>	
		<section class="service-section report-blue-back">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 col-xs-12">
				<div class="remote-benifits">Benefits</div>
				<br>
							<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=benefits' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>
	
				
				</div>
			</div>
		</div>
		
		
		</section >	
		
		<section class="service-section">
    <div class="container ">
        <div class="remote-green-head">
            <p>Why Choose SiteIQ</p>
        </div>
        <div class="row report-3pack-pad">
            <div class="col-md-4 report-padrt0 mobile-pad-lt15">
                <div class="remote-3card-pack">
                    <div class="row">
                        <div class="col-md-3 ipad-ft-left col-3-adj">
                            <img src="http://localhost/site-iq/wordpress/wp-content/themes/aneeq/images/benifits1.png" class="remote-why-icon" />
                        </div>
                        <div class="col-md-9 col-9-adj">
                            <p class="report-ft600 ipad-ft-20" >
                                Monitor all commonly<br />
                                found dispensers
                            </p>
                            <div data-toggle="collapse" data-target="#demo1" class="extra poin-curs">
                                Read More <span><i class="fa fa-angle-double-right read-arrow" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo1" class="collapse coll-body">
                     <li class="mar-bt5"> The same device will work on both Gilbarco and Wayne dispensers.</li> 
                    <li class="mar-bt5">Our goal is to cover 95% of all retail dispensers in the market.</li>
                    <li class="mar-bt5" style="font-size:14px;"><strong>Current coverage:</strong></li>
                    <li class="mar-bt5"><strong>Gilbarco Encore 500/500S/700/700S:</strong></li>
                    <li> Ready for commercial use</li>
                    <li class="mar-bt5"><strong>Wayne Ovation I/II:</strong></li>
                    <li> Currently in pilot test. Launching in Q1-2020</li>
                </div>
            </div>
            <div class="col-md-4 report-padrt0 mobile-pad-lt15">
                <div class="remote-3card-pack poin-curs">
                    <div class="row">
                        <div class="col-md-3 ipad-ft-left col-3-adj">
                            <img src="http://localhost/site-iq/wordpress/wp-content/themes/aneeq/images/benifits3.png" class="remote-why-icon" />
                        </div>
                        <div class="col-md-9 col-9-adj">
                            <p class="report-ft600 ipad-ft-20">
                                Simple Installation<br />
                                in minutes
                            </p>
                            <div data-toggle="collapse" data-target="#demo2" class="extra poin-curs">
                                Read More <span><i class="fa fa-angle-double-right read-arrow" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo2" class="collapse coll-body">
                    <li class="mar-bt5"> Site IQ Kits have been designed to reduce steps and installation time.</li>
                     <li class="mar-bt5"> Average time to install a kit is 20 minutes per dispenser.</li>
                  
                  <li class="mar-bt5"> Onboarding process has been automated by using a pre-activated SIM and a direct connection between a cellular tower and backend cloud infrastructure.</li>
                    <li class="mar-bt5"> First time cellular connectivity can be unpredictable and can add a few minutes to total installation time.</li>
                </div>
            </div>
            <div class="col-md-4 report-padrt0 mobile-pad-lt15">
                <div class="remote-3card-pack">
                    <div class="row">
                        <div class="col-md-3 ipad-ft-left col-3-adj">
                            <img src="http://localhost/site-iq/wordpress/wp-content/themes/aneeq/images/benifits4.png" class="pad-adj remote-why-icon remote-why-width" />
                        </div>
                        <div class="col-md-9 col-9-adj">
                            <p class="report-ft600 ipad-ft-20">
                                Low cost<br />
                                solution
                            </p>
                            <div data-toggle="collapse" data-target="#demo3" class="extra poin-curs">
                                Read More <span><i class="fa fa-angle-double-right read-arrow" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div  id="demo3" class="collapse coll-body">
                    <li class="mar-bt5"> Our goal is to minimize costs and provide the most affordable solution in the market.</li>
                   <li class="mar-bt5">Our pricing is based on a low fixed upfront cost for the kits and an ongoing monthly subscription cost for monitoring dashboards and functionalities. </li>
                </div >
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 report-padrt0 mobile-pad-lt15">
                <div class="remote-3card-pack poin-curs">
                    <div class="row">
                        <div class="col-md-3 ipad-ft-left col-3-adj">
                            <img src="http://localhost/site-iq/wordpress/wp-content/themes/aneeq/images/benefits5.png" class="remote-why-icon" />
                        </div>
                        <div class="col-md-9 col-9-adj">
                            <p class="report-ft600 ipad-ft-20">
                                Enhanced data<br />
                                Security & Reliability
                            </p>
                            <div data-toggle="collapse" data-target="#demo4" class="extra poin-curs">
                                Read More <span><i class="fa fa-angle-double-right read-arrow" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo4" class="collapse coll-body">
                    
                    <li class="mar-bt5">Cellular connectivity is a very secure form of communication.  Site IQ has developed a private APN connection between the cell tower and cloud infrastructure for enhanced security.</li>
                    <li class="mar-bt5"> Additionally, Site IQ uses SSL technology and encryption algorithms to mitigate the risks from cyber attacks.</li>
                </div>
            </div>
            <div class="col-md-4 report-padrt0 mobile-pad-lt15">
                <div class="remote-3card-pack poin-curs">
                    <div class="row">
                        <div class="col-md-3 ipad-ft-left col-3-adj">
                            <img src="http://localhost/site-iq/wordpress/wp-content/themes/aneeq/images/benifits2.png" class="remote-why-icon" />
                        </div>
                        <div class="col-md-9 col-9-adj">
                            <p class="report-ft600 ipad-ft-20">
                                Global Reach/<br />
                                Connectivity
                            </p>
                            <div data-toggle="collapse" data-target="#demo5" class="extra poin-curs">
                                Read More <span><i class="fa fa-angle-double-right read-arrow" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo5" class="collapse coll-body">
                     
                    <li class="mar-bt5">Site IQ has developed its platform using a Global SIM.  This technology enables the flexibility to switch between cellular providers as needed.  </li>
                    <li class="mar-bt5">The benefit of using such a SIM is that our device can automatically pick the cellular provider with the strongest signal even in remote areas.  Even in densely populated areas, this SIM can switch between cellular providers based on the signal strength and traffic congestion.  This enables strong connectivity at all times.</li>
                </div>
            </div>
            <div class="col-md-4 report-padrt0 mobile-pad-lt15">
                <div class="remote-3card-pack ">
                    <div class="row">
                        <div class="col-md-3 ipad-ft-left col-3-adj">
                            <img src="http://localhost/site-iq/wordpress/wp-content/themes/aneeq/images/benifits6.png" class="remote-why-icon" />
                        </div>
                        <div class="col-md-9 col-9-adj">
                            <p class="report-ft600 ipad-ft-20">
                                Real Time<br />
                                Monitoring
                            </p>
                            <div data-toggle="collapse" data-target="#demo" class="extra  poin-curs">
                                Read More <span><i class="fa fa-angle-double-right read-arrow" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo" class="collapse coll-body">
                    <ul>
                         <li class="mar-bt5">With our device, you can get alerts in real time.</li>
                        <li class="mar-bt5"> You can reboot the dispenser instantly and even check if its in use prior to rebooting.</li>
                        <li class="mar-bt5"> Error code data is updated in minutes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
		
		


			<section class="service-section remote-green-back">
		<div class="container ">
			<div class="row">
				<div class="col-md-12 col-xs-12">
	
		<div class="pad-tp-bt-50">
		
		<div class="col-md-6 col-sm-6 col-xs-12"><div class="remote-prod">Product <span class="features" style="padding-left: 66px;">Features</span></div><img class="remote-prod-img" src="http://localhost/site-iq/wordpress/wp-content/themes/aneeq/images/Group 455.png"></div>

		<div class="col-md-6 col-sm-6 col-xs-12">		
									<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=product-feature' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?></div>
		
	
		</div>
				
				
			</div>
		</div>
		
		
		</section>	

		
		
		
		
	
<!-- service section end -->