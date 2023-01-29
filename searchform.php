<form method="get" action="<?php bloginfo('home'); ?>/" id="searchform">
<fieldset>
<input id="searchbox" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" />
<input type="submit" id="searchbutton" value="<?php _e('GO!','wp_multiflex'); ?>" />
</fieldset>
</form>
