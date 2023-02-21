<!-- Footer Start -->
<?php// echo the_field('short_address');?>
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><img src="<?php echo get_header_image();?>" height="50">&ensp; <?php echo get_bloginfo(); ?></h1>
                        </a>
                        <p class="mt-3 mb-4"><?php bloginfo('description','display') ?></p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="text-primary me-2"><i class="fa fa-map-marker-alt me-2"></i></i>
                                <p class="mb-0"><?php the_field('short_address') ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="text-primary me-2"><?php echo get_field_object('email_header')['prepend'] ?></i>
                                <p class="mb-0"><?php the_field('email_header'); ?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="text-primary me-2"><?php echo get_field_object('phone_number')['prepend'] ?></i>
                                <p class="mb-0"><?php the_field('phone_number'); ?></p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="<?php the_field('twitter'); ?>"><?php echo get_field_object('twitter')['prepend']; ?></a>
                                <a class="btn btn-primary btn-square me-2" href="<?php the_field('facebook'); ?>"><?php echo get_field_object('facebook')['prepend']; ?></a>
                                <a class="btn btn-primary btn-square me-2" href="<?php the_field('linkedin'); ?>"><?php echo get_field_object('linkedin')['prepend']; ?></a>
                                <a class="btn btn-primary btn-square" href="<?php the_field('instagram'); ?>"><?php echo get_field_object('instagram')['prepend']; ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <?php
                                    $pages=get_pages();
                                    array_multisort(array_column($pages, 'ID'), SORT_ASC, $pages);
                                    $loop=1;
                                    foreach($pages as $page){
                                ?>
                                <a class="text-light mb-2" href="<?php echo site_url()."/index.php/".$page->post_title; ?>"><i class="bi bi-arrow-right text-primary me-2"></i><?php echo $page->post_title; ?></a>
                                <?php
                                    if($loop==6){
                                        break;
                                    }
                                    $loop++;
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Recent Posts</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <?php get_sidebar('footer'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Logitech</a>. All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="<?php get_template_directory_uri(); ?>"><?php echo get_bloginfo(); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory') ?>/lib/wow/wow.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/lib/easing/easing.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
    <?php wp_footer();?>
</body>

</html>
