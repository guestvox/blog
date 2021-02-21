		<ul class="to-form-field-list">
			<li>
				<h5><?php esc_html_e('Instagram feed','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enable or disable Instagram feed.','portada'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_1'); ?>" value="1" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_instagram_enable'],1); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_1'); ?>"><?php esc_html_e('Enable','portada'); ?></label>
					<input type="radio" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_0'); ?>" value="0" <?php Portada_ThemeHelper::checkedIf($this->data['option']['footer_instagram_enable'],0); ?>/>
					<label for="<?php Portada_ThemeHelper::getFormName('footer_instagram_enable_0'); ?>"><?php esc_html_e('Disable','portada'); ?></label>
				</div>
			</li>				
			<li>
				<h5><?php esc_html_e('Instagram user ID','portada'); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Enter Instagram user account ID from which images have to be retrieved.','portada'); ?><br/>
					<?php echo sprintf(__('More information about how to convert user name to user ID you can find <a href="%s" target="_blank">here</a>.','portada'),'https://smashballoon.com/instagram-feed/find-instagram-user-id/'); ?>
				</span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_user_id'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_user_id'); ?>" value="<?php echo esc_attr($this->data['option']['footer_instagram_user_id']); ?>"/>
				</div>
			</li>					
			<li>
				<h5><?php esc_html_e('Instagram application access token','portada'); ?></h5>
				<span class="to-legend">
					<?php esc_html_e('Enter access token of your Instagram application.','portada'); ?><br/>
					<?php echo sprintf(__('More information about how to create application and generate access token you can find <a href="%s" target="_blank">here</a>.','portada'),'https://elfsight.com/blog/2016/05/how-to-get-instagram-access-token/'); ?>
				</span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_access_token'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_access_token'); ?>" value="<?php echo esc_attr($this->data['option']['footer_instagram_access_token']); ?>"/>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Instagram feed count','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter number of feed which have to be displayed.','portada'); ?></span>
				<div>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('footer_instagram_feed_count'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_instagram_feed_count'); ?>" value="<?php echo esc_attr($this->data['option']['footer_instagram_feed_count']); ?>" maxlength="2"/>
				</div>					
			</li>		
			<li>
				<h5><?php esc_html_e('Logo','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Enter URL of image','portada'); ?><br/></span>
				<div class="to-clear-fix">
					<input type="text" name="<?php Portada_ThemeHelper::getFormName('footer_logo_src'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_logo_src'); ?>" class="to-float-left" value="<?php echo esc_attr($this->data['option']['footer_logo_src']); ?>" />
					<input type="button" name="<?php Portada_ThemeHelper::getFormName('footer_logo_src_browse'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_logo_src_browse'); ?>" class="to-button-browse to-button" value="<?php esc_attr_e('Browse','portada'); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('First menu','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select first (top) menu.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('footer_menu_1'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_menu_1'); ?>">
<?php
						foreach($this->data['dictionary']['menu-1'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['footer_menu_1'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Second menu','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select second (middle) menu.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('footer_menu_2'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_menu_2'); ?>">
<?php
						foreach($this->data['dictionary']['menu-1'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['footer_menu_2'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php esc_html_e('Third menu','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Select third (top) menu.','portada'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php Portada_ThemeHelper::getFormName('footer_menu_3'); ?>" id="<?php Portada_ThemeHelper::getFormName('footer_menu_3'); ?>">
<?php
						foreach($this->data['dictionary']['menu-1'] as $index=>$value)
							echo '<option value="'.esc_attr($index).'" '.(Portada_ThemeHelper::selectedIf($this->data['option']['footer_menu_3'],$index,false)).'>'.esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php esc_html_e('Bottom footer content','portada'); ?></h5>
				<span class="to-legend"><?php esc_html_e('Bottom footer content.','portada'); ?></span>
				<div>
					<?php wp_editor($this->data['option']['footer_bottom_content'],Portada_ThemeHelper::getFormName('footer_bottom_content',false)); ?>
				</div>
			</li>
		</ul>