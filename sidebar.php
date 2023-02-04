<div id="sidebar">
    <div class="sidebar_mobile">
        <p class="sidebar_mobile_home"><a href="<?php bloginfo('url'); ?>">Home</a></p>
        <div id="crumb-search">
            <div id="searchbar">
                <?php include TEMPLATEPATH . '/searchform.php'; ?>
            </div>
        </div>
        <div class="sidebar_mobile_icon">
            <svg id="sidebar_mobile-icon"  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="
                border: 1px solid #c8c8c8;
            ">
                <path d="M5 7H19" stroke="black" stroke-width="2" stroke-linecap="round"></path>
                <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round"></path>
                <path d="M5 17H19" stroke="black" stroke-width="2" stroke-linecap="round"></path>
            </svg>

        </div>
        <div id="sidebar_mobile_content">
            <ul style="display: block;">
                <?php wp_list_pages('sort_column=post_title&sort_order=asc&title_li='); ?>
            </ul>
        </div>

    </div>

    <ul class="sidebar_pc">

        <li>
            <h2 class="pages"><?php _e('Sammelgebiete', 'wp_multiflex'); ?></h2>
            <ul>
                <!-- <li class="<?php echo $highlight; ?>"><a href="<?php echo get_settings('home'); ?>"><?php _e('Home', 'wp_multiflex'); ?></a></li> -->
                <?php wp_list_pages('sort_column=post_title&sort_order=asc&title_li='); ?>
            </ul>
        </li>

        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Left Sidebar','wp_multiflex')) ) : else : ?>

        <!-- <li>
            <h2><?php _e('Categories', 'wp_multiflex'); ?></h2>
            <ul>
                <?php wp_list_cats('sort_column=name&optioncount=0&hierarchical=1'); ?>
            </ul>
        </li>

        <li>
            <h2><?php _e('Archives', 'wp_multiflex'); ?></h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li> -->

        <?php endif; ?>

    </ul>
</div>

