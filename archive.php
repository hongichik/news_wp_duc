<?php get_header(); ?>

<div id="left-wrap">

<div id="content">
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php /* If this is a category archive */ if (is_category()) { ?>				
<h2 class="pagetitle"><?php _e('Archive for the','wp_multiflex'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category','wp_multiflex'); ?></h2>

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="pagetitle"><?php _e('Archive for','wp_multiflex'); ?> <?php the_time('F jS, Y'); ?></h2>

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="pagetitle"><?php _e('Archive for','wp_multiflex'); ?> <?php the_time('F, Y'); ?></h2>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="pagetitle"><?php _e('Archive for','wp_multiflex'); ?> <?php the_time('Y'); ?></h2>

<?php /* If this is a search */ } elseif (is_search()) { ?>
<h2 class="pagetitle"><?php _e('Search Results','wp_multiflex'); ?></h2>

<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="pagetitle"><?php _e('Author Archive','wp_multiflex'); ?></h2>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="pagetitle"><?php _e('Blog Archives','wp_multiflex'); ?></h2>

<?php } ?>

	
<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','wp_multiflex'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<p class="prefix"><?php the_time(__('F jS, Y','wp_multiflex')) ?> <?php _e('by','wp_multiflex'); ?> <?php the_author(); ?> </p>
           
<div class="entry">
<?php the_content(__('Read the rest of this entry &raquo;','wp_multiflex')); ?>
</div>
                    
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
<h1 class="center"><?php _e('Not Found','wp_multiflex'); ?></h1>
<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.','wp_multiflex'); ?></p>
<p class="center"><?php _e('Perhaps you would like to try another search or select from one of the links on the menu.','wp_multiflex'); ?></p>
</div>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>

</div> <!-- Close id="left-wrap" -->

<?php include (TEMPLATEPATH . '/right-sidebar.php'); ?>

<?php get_footer(); ?>
