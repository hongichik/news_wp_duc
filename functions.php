<?php

// Lets load the themes text domain for the localisation
load_theme_textdomain('wp_multiflex');

// Register the Header Widget
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => __('Header','wp_multiflex'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));	

// Register the Left Sidebar
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => __('Left Sidebar','wp_multiflex'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>"
	));
// Register the Right Sidebar
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => __('Right Sidebar','wp_multiflex'),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle"><span>',
		'after_title' => '</span></h2>',
	));

// Create top header 	
	function widget_multiflex_header_top() {
?>
<div id="masthead">
<div class="left-masthead">
<a class="site-logo" href="<?php echo get_settings('home'); ?>"></a>
<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
<p class="description"><?php bloginfo('description'); ?></p>
</div>
<div class="right-masthead">
<a class="rss-logo" href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('RSS Feed','wp_multiflex'); ?>"></a> 
</div>
</div>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Header Site Title','wp_multiflex'), 'widget_multiflex_header_top');

// Create middle of header 	
	function widget_multiflex_header_middle() {
?>
<div id="header">
<div id="textbox">
<?php include (TEMPLATEPATH . '/header-text.php'); ?>
</div>
</div>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Header Image','wp_multiflex'), 'widget_multiflex_header_middle');
	 

// Create bottom of header 	
	function widget_multiflex_header_bottom() {
?>
	<?php if (is_page()) { $highlight = "page_item"; } else {$highlight = "page_item current_page_item"; } ?>
	<div id="navigation">
	<ul>
	<li class="<?php echo $highlight; ?>"><a href="<?php echo get_settings('home'); ?>"><?php _e('Home','wp_multiflex'); ?></a></li>
	<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=' ); ?> 
	</ul>
</div>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Header Navigation','wp_multiflex'), 'widget_multiflex_header_bottom');
	 
// Unregister Widgets that we don't want	
function unregister_some_widgets() {
unregister_widget_control('Pages');
unregister_sidebar_widget('Pages');
unregister_widget_control('Meta');
unregister_sidebar_widget('Search');
unregister_widget_control('Search');
unregister_sidebar_widget('RSS 1');
unregister_sidebar_widget('RSS 2');
unregister_sidebar_widget('RSS 3');
unregister_sidebar_widget('RSS 4');
unregister_sidebar_widget('RSS 5');
unregister_sidebar_widget('RSS 6');
unregister_sidebar_widget('RSS 7');
unregister_sidebar_widget('RSS 8');
unregister_sidebar_widget('RSS 9');
unregister_widget_control('RSS 1');
unregister_widget_control('RSS 2');
unregister_widget_control('RSS 3');
unregister_widget_control('RSS 4');
unregister_widget_control('RSS 5');
unregister_widget_control('RSS 6');
unregister_widget_control('RSS 7');
unregister_widget_control('RSS 8');
unregister_widget_control('RSS 9');

}
add_action('widgets_init','unregister_some_widgets');

	
// Redefine the Recent Posts menu 	
	function widget_multiflex_recent() {
?>
<li id="recentposts"><h2><span><?php _e('Recent Posts','wp_multiflex'); ?></span></h2>
<ul>
<?php wp_get_archives('type=postbypost&limit=10&format=custom&before=<li class=recentposts>&after=</li>'); ?>
</ul>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Recent Posts'), 'widget_multiflex_recent');

// Redefine the Meta menu 	
	function widget_multiflex_meta() {
?>
<li><h2><span><?php _e('Meta','wp_multiflex'); ?></span></h2>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
</ul>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Meta','wp_multiflex'), 'widget_multiflex_meta');	 

// Create a RSS Feed Menu 	
	function widget_multiflex_subscribe() {
?>
<li><h2><span><?php _e('Subscribe','wp_multiflex'); ?></span></h2>
<ul>
<li><a href="feed:<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','wp_multiflex'); ?></a></li>
<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','wp_multiflex'); ?></a></li>
</ul>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Subscribe','wp_multiflex'), 'widget_multiflex_subscribe');		

// Lets make a Author Menu 
	function widget_multiflex_authors() {
?>
<li><h2><span><?php _e('Authors','wp_multiflex'); ?></span></h2>
<ul>
<?php wp_list_authors('show_fullname=0&optioncount=1&exclude_admin=0'); ?>
</ul>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Authors','wp_multiflex'), 'widget_multiflex_authors');

// How about a yearly archive Menu 
	function widget_multiflex_yearly() {
?>
<li><h2><span><?php _e('Yearly Archives','wp_multiflex'); ?></span></h2>
<ul>
<?php wp_get_archives('show_post_count=1&type=yearly'); ?>
</ul>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Years','wp_multiflex'), 'widget_multiflex_yearly');
	 
// Just for fun a monthly archive limited to the last 12 month 
	function widget_multiflex_twelvemonths() {
?>
<li><h2><span><?php _e('Last 12 Months','wp_multiflex'); ?></span></h2>
<ul>
<?php wp_get_archives('show_post_count=1&type=monthly&limit=12'); ?>
</ul>
</li>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Last 12 Months','wp_multiflex'), 'widget_multiflex_twelvemonths');
	 
?>