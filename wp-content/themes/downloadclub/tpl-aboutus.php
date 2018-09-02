<?php
/*
Template Name: About US
*/
?>
<?php
get_header();
?>
    <div class="entry-header-cover entry-header" id="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="banner-content-wrap">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <h2 class="h6">Design these templete thinking about categories, color, typography and latest
                            treand</h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .entry-header -->
<?php
downloadclub_page_wrapper_start();
?>

    <!-- <div class="container">
        <div id="primary" class="content-area row">
            <div id="main" class="site-main col-md-12">
				<?php
	/*				while ( have_posts() ) :
						the_post();
					endwhile; // End of the loop.
					*/ ?>

            </div><!-- #main
        </div><!-- #primary
    </div>-->

    <!--== About Page Content Start ==-->
    <div id="about-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <figure class="about-video-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-video.jpg"
                             alt="Themeboxr"/>

                        <figcaption class="video-content">
                            <a href="https://player.vimeo.com/video/166335897?title=0&portrait=0&byline=0&autoplay=1&loop=1"
                               class="btn btn-play video-popup"><i class="fa fa-play"></i></a>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-lg-6">
                    <div class="about-right-content">
                        <h2>What Is Inside This Themes?</h2>
                        <p>Biz Zone is a responsive theme. It is compatible with all types of browsers and devices.
                            Similarly, it provides some prebuilt functionality like contact page, projects aryou don’t
                            need to add some plugins. It’ll any business.</p>

                        <ul class="aboutlist">
                            <li><span>#</span> Let’s take a look at the core features of the free WordPress theme</li>
                            <li><span>#</span> All the contents are easily customizable</li>
                            <li><span>#</span> Responsive – supports all kinds of popular browsers and devices</li>
                            <li><span>#</span> Clean code and Well-Optimized</li>
                        </ul>

                        <a href="#" class="btn btn-brand">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== About Page Content End ==-->

    <!--== Technical Person Start ==-->
    <section id="technical-person" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title-wrap">
                        <h2>Our Technical Person</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="technical-support">
                        <p>Theay are ready to provide you batter service, if you nedd any kind of help or if you feel you are in a problem,  just feel free to noticed us, you get 100% premium support from them. happy web designing</p>

                        <a href="#" class="btn btn-brand">Get Premium Support</a>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo-team.png" alt="Themeboxr"/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Technical Person End ==-->

    <!--== Testimonial Start ==-->
    <div id="testimonial-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title-wrap">
                        <h2>Testimonial's</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-content-wrap">
                        <div id="testimonialContent">
                            <div class="single-testimonial-item">
                                <i class="fa fa-quote-left"></i>
                                <p>Lorem ipsum dolor sit a, consectetur adipisicing elit, sed do eiuod tempor incididunt ut bore et dolore na aliqua. Ut enim ad minim veniaguis nostrud exercitf to nisi ut aliquip</p>
                                <div class="client-info">
                                    <h3 class="h6">Prischilla Chan</h3>
                                    <span class="client-degi">CEO at Mediumsoft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Testimonial End ==-->

    <!--== We Are Best Area Start ==-->
    <section id="we-are-best-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title-wrap">
                        <h2>Why We Are Best </h2>
                        <p>Here we listed some some reasone of why we are best</p>
                    </div>
                </div>
            </div>

            <div class="we-best-content-wrap">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="single-we-best-item">
                            <figure class="feature-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/we-best/satisfication.png"
                                     alt="Themeboxr"/>
                            </figure>

                            <h3 class="h4">100% Satisfaction</h3>
                            <p>We provide best services in this field, so we belived that you are fully satisfied on our
                                service and wishes us good luck.</p>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="single-we-best-item">
                            <figure class="feature-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/we-best/support.png"
                                     alt="Themeboxr"/>
                            </figure>

                            <h3 class="h4">Best Support</h3>
                            <p>We provide best services in this field, so we belived that you are fully satisfied on our
                                service and wishes us good luck.</p>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="single-we-best-item">
                            <figure class="feature-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/we-best/square.png"
                                     alt="Themeboxr"/>
                            </figure>

                            <h3 class="h4">Fully Squared</h3>
                            <p>We provide best services in this field, so we belived that you are fully satisfied on our
                                service and wishes us good luck.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== We Are Best Area End ==-->

    <!--== Newsletter Area Start ==-->
    <section id="newsletter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 m-auto text-center text-md-left">
                            <h2 class="h4">Subcribes to Update With Us</h2>
                        </div>

                        <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Your Email Address" required/>
                                    <button class="btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Newsletter Area End ==-->


<?php
downloadclub_page_wrapper_end();
get_footer();
