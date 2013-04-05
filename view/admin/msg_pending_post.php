<?php echo $subscriber_name; ?>,<br /><br />

<?php echo sprintf( __( 'A %1$s on the %2$s site, "%3$s", by %4$s is pending review: <a href="%5$s">edit or publish it</a>.', 'email-alerts' ), $post->post_type, $blog_name, $post->post_title, $post_author_name, $post_edit_link ); ?><br /><br />

<p><small><?php _e( '(Email Alerts plugin)', 'email-alerts' ); ?></small></p>
