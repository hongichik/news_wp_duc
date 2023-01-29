<?php get_header(); ?>

<div id="left-wrap">

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="navigation">
<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>

<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to','wp_multiflex'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<p class="prefix"><?php the_time(__('F jS, Y','wp_multiflex')); ?> <?php _e('by','wp_multiflex'); ?> <?php the_author(); ?> </p>

<div class="entry">
<?php the_content(__('Read the rest of this entry &raquo;','wp_multiflex')); ?>
</div>

<?php link_pages('<p>'.__('Pages:','wp_multiflex'), '</p>', 'number'); ?>

<p class="suffix">
<?php _e('This entry was posted on','wp_multiflex'); ?> <?php the_time(__('l, F jS, Y','wp_multiflex')) ?> <?php _e('at','wp_multiflex'); ?> <?php the_time() ?> 
<?php _e('and is filed under','wp_multiflex'); ?> <?php the_category(', ') ?>. 
<?php _e('You can follow any responses to this entry through the','wp_multiflex'); ?> <?php comments_rss_link('RSS 2.0'); ?> <?php _e('feed','wp_multiflex'); ?>. 
<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

// Both Comments and Pings are open ?>
<?php _e('You can','wp_multiflex'); ?> <a href="#respond"><?php _e('leave a response','wp_multiflex'); ?></a>, <?php _e('or','wp_multiflex'); ?> <a href="<?php trackback_url(true); ?>" rel="trackback"><?php _e('trackback','wp_multiflex'); ?></a> <?php _e('from your own site','wp_multiflex'); ?>.
<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {

// Only Pings are Open ?>
<?php _e('Responses are currently closed, but you can','wp_multiflex'); ?> <a href="<?php trackback_url(true); ?> " rel="trackback"><?php _e('trackback','wp_multiflex'); ?></a> <?php _e('from your own site','wp_multiflex'); ?>.
<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

// Comments are open, Pings are not ?>
<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.','wp_multiflex'); ?>
<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {

// Neither Comments, nor Pings are open ?>
<?php _e('Both comments and pings are currently closed.','wp_multiflex'); ?>			
					
<?php } edit_post_link(__('Edit this entry.','wp_multiflex'),'',''); ?>
</p>

</div>
		
<?php comments_template(); ?>
	
<div class="bottomnavigation">
<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>	
	
<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.','wp_multiflex'); ?></p>
	
<?php endif; ?>

</div> <!-- Close id="content" -->

<?php get_sidebar(); ?>

</div> <!-- Close id="left-wrap" -->

<?php include (TEMPLATEPATH . '/right-sidebar.php'); ?>

<?php get_footer(); ?>