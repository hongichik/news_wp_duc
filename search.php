<?php get_header(); ?>

<div id="left-wrap">

<div id="content">

<?php if (have_posts()) : ?>

<h1 class="pagetitle"><?php _e('Search Results','wp_multiflex'); ?></h1>
		
<?php while (have_posts()) : the_post(); ?>
				
<div class="post">
<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','wp_multiflex'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="prefix"><?php the_time(__('F jS, Y','wp_multiflex')) ?> <?php _e('by','wp_multiflex'); ?> <?php the_author(); ?> </p>
<div class="entry">				
<?php the_excerpt(''); ?>
</div>

<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php _e('Read the rest of this post...','wp_multiflex'); ?></a></p>

<p class="suffix">
<?php _e('Category:','wp_multiflex'); ?> <?php the_category(', ') ?> | 
<?php edit_post_link(__('Edit','wp_multiflex'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;','wp_multiflex'), __('1 Comment &#187;','wp_multiflex'), __('% Comments &#187;','wp_multiflex')); ?>
</p>

</div>
	
<?php endwhile; ?>

<div class="bottomnavigation">
<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries','wp_multiflex')) ?></div>
<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;','wp_multiflex')) ?></div>
</div>
	
<?php else : ?>

<div id="page">
<h1 class="center"><?php _e('Search Results','wp_multiflex'); ?></h1>
<h2 class="center"><?php _e('Not Found','wp_multiflex'); ?></h2>
<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','wp_multiflex'); ?></p>
<p class="center"><?php _e('Perhaps you would like to try another search or select from one of the links on the menu.','wp_multiflex'); ?></p>
</div>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

</div> <!-- Close id="left-wrap" -->

<?php include (TEMPLATEPATH . '/right-sidebar.php'); ?>

<?php get_footer(); ?>