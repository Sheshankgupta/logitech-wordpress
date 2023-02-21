<?php
get_header('others');
?>
<div class="m-5">
<div class="section-title position-relative pb-3 mb-5">
    <h4 class="fw-bold text-primary text-uppercase"><?php the_title(); ?></h4>
    <!-- <h1 class="mb-0"></h1> -->
</div>
<?php 
    the_content(); 
    the_author();
    comment_form(array('comment_notes_after' => ''));
?>
</div>
<?php get_footer(); ?>
