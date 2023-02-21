<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php bloginfo('template_directory') ?>/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css'?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri().'/lib/animate/animate.min.css'?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo get_template_directory_uri().'/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo get_template_directory_uri().'/css/style.css'?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="hide bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><?php echo get_field_object('short_address')['prepend']; the_field('short_address'); ?></i></small>
                    <small class="me-3 text-light"><?php echo get_field_object('phone_number')['prepend']; the_field('phone_number'); ?></small>
                    <small class="text-light"><?php echo get_field_object('email_header')['prepend']; the_field('email_header'); ?></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php the_field('twitter'); ?>"><?php echo get_field_object('twitter')['prepend'];?></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php the_field('facebook'); ?>"><?php echo get_field_object('facebook')['prepend'];?></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php the_field('linkedin'); ?>"><?php echo get_field_object('linkedin')['prepend'];?></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php the_field('instagram'); ?>"><?php echo get_field_object('instagram')['prepend'];?></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="<?php the_field('youtube'); ?>"><?php echo get_field_object('youtube')['prepend'];?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0" style="background-image:url('<?php 
    if(wp_get_attachment_image_src(get_post_thumbnail_id(),'large')){
        echo(wp_get_attachment_image_src(get_post_thumbnail_id(),'large')[0]);
    } else{
        echo site_url()."/assets/img/default.jpeg";
    }
    ?>'); background-attachment:fixed; background-repeat:no-repeat; height:400px; width:100%; background-size:cover;">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><img src="<?php echo get_header_image();?>" height="50">&ensp; <?php echo get_bloginfo(); ?></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                   <?php wp_nav_menu(array(
                    'theme_laoction'=>'primary-menu',
                    'menu_class'=>'nav-custom'
                   )); ?>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>
            </div>
        </nav>
        <div class="text-center object-fit-cover" style="padding-top:15%">
            <h1 class="text-white text-uppercase mb-3 animated slideInDown"><?php wp_title(''); ?><h1>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Full Screen Search End -->