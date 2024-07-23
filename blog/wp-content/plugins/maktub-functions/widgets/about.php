<?php
if ( ! class_exists( 'epcl_about' ) ) {
	class epcl_about extends WP_Widget{

		function __construct(){
			$widget_ops = array( 'description' => esc_html_x('Display about author section.', 'admin', 'maktub') );
			parent::__construct( false, esc_html_x('(EP) About me', 'admin', 'maktub'), $widget_ops);
		}

		function widget($args, $instance){
            // WP 5.9 Patch: always disable widget preview in the backend
            if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
                return false;
            }
		    global $epcl_theme;
			extract($args);
            $title = apply_filters('widget_title', $instance['title']);
            $author_id =  $instance['author'];
			echo $before_widget;
				if($title) echo $before_title.$title.$after_title;
                if( $author_id ):
                    
                    $user_meta = get_user_meta( $author_id, 'epcl_user', true );       
                    $author_name = get_the_author_meta('display_name', $author_id);
                    $author_url = get_author_posts_url($author_id);
                    $author_avatar = epcl_get_author_avatar($user_meta, $author_id);
                    $website = get_the_author_meta('user_url', $author_id);             

                ?>
                        <?php if($author_avatar): ?>
                            <div class="avatar">                            
                                <a href="<?php echo esc_url( $author_url ); ?>" class="translate-effect thumb"><span class="fullimage cover"  style="background-image: url(<?php echo esc_url( $author_avatar ); ?>)"></span></a>                            
                            </div>
                        <?php else: ?>
                            <a href="<?php echo get_author_posts_url($author_id); ?>" title="<?php echo esc_attr__('Author:', 'maktub').' '.esc_attr($author_name); ?>" class="epcl-dropcap rounded no-border large author-avatar avatar translate-effect">
                                <span><?php echo mb_substr( $author_name, 0, 1); ?></span>
                            </a> 
                        <?php endif; ?>
                        <div class="info">
                            <h4 class="title small author-name no-margin"><a href="<?php echo esc_url( $author_url ); ?>"><?php echo esc_html( $author_name ); ?></a></h4>
                            <?php if( isset( $instance['position'] ) ): ?>
                                <p class="founder"><?php echo esc_html( $instance['position'] ); ?></p>
                            <?php endif; ?>                          
                            <div class="social">                                
                                <?php if( isset($user_meta['twitter']) && $user_meta['twitter'] ): ?>
                                    <a href="<?php echo esc_url( $user_meta['twitter'] ); ?>" class="twitter tooltip" title="<?php esc_attr_e('Follow me on Twitter', 'maktub'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                <?php endif; ?>
                                <?php if( isset($user_meta['facebook']) && $user_meta['facebook'] ): ?>
                                    <a href="<?php echo esc_url( $user_meta['facebook'] ); ?>" class="facebook tooltip" title="<?php esc_attr_e('Follow me on Facebook', 'maktub'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                <?php endif; ?>
                                <?php if($website): ?>
                                    <a href="<?php echo esc_url($website); ?>" class="website tooltip" title="<?php esc_attr_e('Website', 'maktub'); ?>: <?php echo esc_url($website); ?>" target="_blank"><i class="fa fa-globe"></i></a>
                                <?php endif; ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        
                        <p><?php the_author_meta('description', $author_id); ?></p>
                <?php
                endif;
                
			echo $after_widget;
		}

		function update($new_instance, $old_instance){
			$instance = $old_instance;
            $instance['title'] = strip_tags($new_instance['title']);
            $instance['position'] = strip_tags($new_instance['position']);
			$instance['author'] = absint( $new_instance['author'] );
			return $instance;
		}

		function form($instance){
			$defaults = array(
                'title' => 'About me',
                'position' => 'Founder &amp; Editor',
				'author' => ''
			);
            $instance = wp_parse_args((array)$instance, $defaults);
            $users = get_users();
			?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">
					<?php echo esc_html_x('Title:', 'admin', 'maktub'); ?>
					<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $instance['title']; ?>" />
				</label>
            </p>
            <p>
				<label for="<?php echo $this->get_field_id('position'); ?>">
					<?php echo esc_html_x('Author Position:', 'admin', 'maktub'); ?>
					<input class="widefat" id="<?php echo $this->get_field_id('position'); ?>" name="<?php echo $this->get_field_name('position'); ?>" type="text" value="<?php echo $instance['position']; ?>" />
				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('author'); ?>"><?php echo esc_html_x('Author:', 'admin', 'maktub') ?> </label>
                <?php wp_dropdown_users( array('name' => $this->get_field_name( 'author' ), 'selected' => $instance['author'] ) ); ?>
                <br><small><?php echo esc_html_x('Select an author to display all his information. Remember to fill your profile (website, Twitter and Facebook.)', 'admin', 'maktub') ?></small>
			</p>
			<?php
		}

	}

	function epcl_register_about() {
		register_widget('epcl_about');
	}

	add_action('widgets_init', 'epcl_register_about');

}
