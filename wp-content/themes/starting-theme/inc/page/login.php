<!-- login form -->
<?php
global $user_login;
// In case of a login error.
if ( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) : ?>
  <div class="aa_error">
  <p><?php _e( 'FAILED: Try again!', 'AA' ); ?></p>
  </div>
<?php endif;

// If user is already logged in.
if ( is_user_logged_in() ) : ?>

<?php
// If user is not logged in.
else: ?>

  <div class="logincontainer">

    <div class="vert-align">

      <div class="loginwrapper">
      <h1>Dealer Sign In</h1>
      <p class="intro">If you don’t already have your sign in details please contact us <a href="<?php echo site_url(); ?>/contact/">HERE.</a></p>
      <?php

      // Login form arguments.
      $args = array(
      'echo'           => true,
      'redirect'       => home_url( '/dealer-area/' ),
      'form_id'        => 'loginform',
      'label_username' => __( 'Sign In Name' ),
      'label_password' => __( 'Password' ),
      'label_remember' => __( 'Remember Me' ),
      'label_log_in'   => __( 'Login' ),
      'id_username'    => 'user_login',
      'id_password'    => 'user_pass',
      'id_remember'    => 'rememberme',
      'id_submit'      => 'wp-submit',
      'remember'       => true,
      'value_username' => NULL,
      'value_remember' => true
      );

      // Calling the login form.
      wp_login_form( $args );

      ?>
      <a class="exit" href="/">Not a dealer?</a>
      </div><!-- /loginwrapper -->

    </div><!-- /vert-align -->
  </div><!-- /logincontainer -->
<?php endif; ?>


 <!-- /login form -->
