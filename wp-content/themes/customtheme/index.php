<?php
 get_header('others');
?>
  <!-- Blog Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <?php
                            while(have_posts()){
                                the_post();
                                $img=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
                        ?>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="<?php echo $img[0]; ?>" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 pe-2 ps-3 w-50 h-25 overflow-hidden" href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php the_author(); ?></small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo get_the_date('F j, Y'); ?></small>
                                    </div>
                                    <h4 class="mb-3"><?php the_title(); ?></h4>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="text-uppercase" href="<?php echo get_post_permalink(); ?>">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <?php echo wp_pagenavi(); ?>
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <?php get_sidebar(); ?>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-1.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-2.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-3.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-4.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-5.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-6.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-7.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-8.jpg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

 <?php
  get_footer(); ?>