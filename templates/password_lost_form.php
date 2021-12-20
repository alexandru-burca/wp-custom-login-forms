<div id="password-lost-form" class="widecolumn">
	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
		<?php foreach ( $attributes['errors'] as $error ) : ?>
			<p class="login-error">
				<?php echo $error; ?>
			</p>
		<?php endforeach; ?>
	<?php endif; ?>

	<p class="login-info">
		<?php
			_e(
				"Enter your email address and we'll send you a link you can use to pick a new password.",
				'personalize_login'
			);
		?>
	</p>

	<form id="lostpasswordform" action="/wp-login.php?action=lostpassword" method="post">
		<p class="form-row">
			<label for="user_login"><?php _e( 'Email', 'personalize-login' );?>
			<input type="text" name="user_login" id="user_login" placeholder="Email Address">
		</p>

		<p class="lostpassword-submit">
			<input type="submit" name="submit" class="lostpassword-button"
			       value="<?php _e( 'Reset Password', 'personalize-login' ); ?>"/>
		</p>
	</form>
</div>