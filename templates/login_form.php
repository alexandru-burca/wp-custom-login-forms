<div class="login-form-container">
	<!-- Show errors if there are any -->
	<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
		<?php foreach ( $attributes['errors'] as $error ) : ?>
			<p class="login-error">
				<?php echo $error; ?>
			</p>
		<?php endforeach; ?>
	<?php endif; ?>

	<!-- Show logged out message if user just logged out -->
	<?php if ( $attributes['logged_out'] ) : ?>
		<p class="login-info">
			<?php _e( 'You have signed out. Would you like to sign in again?', 'personalize-login' ); ?>
		</p>
	<?php endif; ?>

	<?php if ( $attributes['lost_password_sent'] ) : ?>
		<p class="login-info">
			<?php _e( 'Check your email for a link to reset your password.', 'personalize-login' ); ?>
		</p>
	<?php endif; ?>

	<?php if ( $attributes['password_updated'] ) : ?>
		<p class="login-info">
			<?php _e( 'Your password has been changed. You can sign in now.', 'personalize-login' ); ?>
		</p>
	<?php endif; ?>

	<?php
		wp_login_form(
			array(
				'label_username' => __( 'Email', 'personalize-login' ),
				'label_log_in' => __( 'Sign In', 'personalize-login' ),
				'redirect' => $attributes['redirect'],
			)
		);
	?>

	<a class="forgot-password" href="<?php echo wp_lostpassword_url(); ?>">
		<?php _e( 'Forgot your password?', 'personalize-login' ); ?>
	</a>

</div>
