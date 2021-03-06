<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="login" id="theme-my-login<?php $template->the_instance(); ?>">
	<?php $template->the_action_template_message( 'lostpassword' ); ?>
	<?php $template->the_errors(); ?>
	<form name="lostpasswordform" id="lostpasswordform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'lostpassword' ); ?>" method="post">
		<fieldset>
			<?php do_action( 'lostpassword_form' ); ?>
			<div class="clearfix">
				<label for="user_login<?php $template->the_instance(); ?>"><?php _e( 'Username or E-mail:' ); ?></label>
				<div class="desc">
					<input type="text" name="user_login" id="user_login<?php $template->the_instance(); ?>" class="span-11" value="<?php $template->the_posted_value( 'user_login' ); ?>" />
				</div>
			</div>
			
			<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'lostpassword' ); ?>" />
			<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
			<input type="hidden" name="action" value="lostpassword" />
			
			<div class="clearfix">
				<label>&nbsp;</label>
				<div class="desc">
					<input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'Get New Password' ); ?>" />
				</div>				
			</div>
			<?php //$template->the_action_links( array( 'lostpassword' => false ) ); ?>
			
		</fieldset>
</div>
