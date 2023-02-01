<div id="right-sidebar">

    <div id="crumb-search">
        <h2>LEXIKON</h2>
        <div id="breadcrumb">
            <?php if (function_exists('breadcrumb')) {
                breadcrumb('link_all=true&home_always=true&sep=');
            } ?>
        </div>
        <div id="searchbar">
            <?php include TEMPLATEPATH . '/searchform.php'; ?>
        </div>
    </div>  
    <ul>

        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Right Sidebar','wp_multiflex')) ) : else : ?>

        <li id="recentposts">
            <h2><span><?php _e('Recent Posts', 'wp_multiflex'); ?></span></h2>
            <ul>
                <?php wp_get_archives('type=postbypost&limit=10&format=custom&before=<li class=recentposts>&after=</li>'); ?>
            </ul>
        </li>

        <li>
            <h2><span><?php _e('Meta', 'wp_multiflex'); ?></span></h2>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </li>

        <li>
            <h2><span><?php _e('Subscribe', 'wp_multiflex'); ?></span></h2>
            <ul>
                <li><a href="feed:<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)', 'wp_multiflex'); ?></a></li>
                <li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)', 'wp_multiflex'); ?></a></li>
            </ul>
        </li>

        <?php endif; ?>

    </ul>

</div>
