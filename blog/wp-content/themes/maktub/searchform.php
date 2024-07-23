<form action="<?php echo home_url('/'); ?>" method="get" class="search-form">
	<input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" class="search-field" placeholder="<?php esc_attr_e('Type to start your search...', 'maktub'); ?>" aria-label="<?php esc_attr_e('Type to start your search...', 'maktub'); ?>" required>
	<button type="submit" class="submit" aria-label="<?php esc_attr_e('Submit', 'maktub'); ?>"><svg class="icon main-color"><use xlink:href="#search-icon"></use></svg></button>
</form>