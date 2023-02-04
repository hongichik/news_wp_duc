<?php get_header(); ?>

<div id="left-wrap">

<div id="content">

<div class="page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>

<div class="entry">
<?php the_content(__('Read the rest of this entry &raquo;','wp_multiflex')); ?>
</div>	

<?php link_pages('<p>'.__('Pages:','wp_multiflex'), '</p>', 'number'); ?>

<?php endwhile; endif; ?>

<p class="edit"><?php edit_post_link(__('Edit','wp_multiflex'),'',''); ?></p>
<?php //include (TEMPLATEPATH . '/comments.php'); ?>
<?php 
    if(comments_open() || get_comments_number()) :
        comments_template();
    endif
?>
</div>
	


</div>

<?php get_sidebar(); ?>

</div> <!-- Close id="left-wrap" -->

<?php include (TEMPLATEPATH . '/right-sidebar.php'); ?>

<?php get_footer(); ?>
