<?php
register_nav_menus(
    array('primary-menu'=>'Top Menu'),
);
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );

  function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 20 );

register_sidebar(
  array(
    'name'=> 'sidebar location',
    'id'=>'sidebar',
    'description'=>'will be shown in right side'
  )
);
register_sidebar(
  array(
    'name'=> 'footer location',
    'id'=>'footer',
    'description'=>'will be shown in footer',
  )
);
acf_add_options_page(array(
  'page_title'    => 'Theme General Settings',
  'menu_title'    => 'Theme Settings',
  'menu_slug'     => 'theme-general-settings',
  'capability'    => 'edit_posts',
  'redirect'      => false
));
acf_add_options_sub_page(array(
  'page_title'    => 'Theme Header Settings',
  'menu_title'    => 'Header',
  'parent_slug'   => 'theme-general-settings',
));
acf_add_options_sub_page(array(
  'page_title'    => 'Theme Footer Settings',
  'menu_title'    => 'Footer',
  'parent_slug'   => 'theme-general-settings',
));
acf_add_options_page(array(
  'page_title'    => 'Post Settings',
  'menu_title'    => 'Post Settings',
  'menu_slug'     => 'post-settings',
  'capability'    => 'edit_posts',
  'parent_slug'   => 'post.php',
  'position'      => false,
  'icon_url'      => false
));
?>