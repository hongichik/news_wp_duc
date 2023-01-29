<div id="sidebar">

<ul>

<li><h2 class="pages"><?php _e('Pages','wp_multiflex'); ?></h2>
<ul>
<li class="<?php echo $highlight; ?>"><a href="<?php echo get_settings('home'); ?>"><?php _e('Home','wp_multiflex'); ?></a></li>
<?php wp_list_pages('sort_column=menu_order&title_li=' ); ?> 
</ul>
</li>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Left Sidebar','wp_multiflex')) ) : else : ?>

<li><h2><?php _e('Categories','wp_multiflex'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=1'); ?>
</ul>
</li>

<li><h2><?php _e('Archives','wp_multiflex'); ?></h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</li>

<?php endif; ?>

</ul>
</div>