<?php echo $subscriber_name; ?>,<br /><br />

<?php echo sprintf( __( 'A new %1$s on the %2$s site, <a href="%3$s">%4$s</a>, by %5$s (%6$s), has been published.', 'email-alerts' ), $post->post_type, $blog_name, $post_permalink, $post->post_title, $post_author_name, $post_author_email ); ?><br /><br />

<?php echo sprintf( __( 'Approved by: %1$s (%2$s)', 'email-alerts' ), $acting_admin_name, $acting_admin_email ); ?>

<p><small><?php _e( '(Email Alerts plugin)', 'email-alerts' ); ?></small></p>
