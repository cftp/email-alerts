<?php echo $subscriber_name; ?>,<br /><br />

<?php echo sprintf( __( 'A post, "%1$s", by %2$s is pending review: <a href="%3$s">edit or publish post</a>.', 'email-alerts' ), $post->post_title, $post_author_name, $post_edit_link ); ?><br /><br />

<p><small><?php _e( '(Email Alerts plugin)', 'email-alerts' ); ?></small></p>