<?php echo $subscriber_name; ?>,<br /><br />

<?php echo sprintf( __( 'A %1$s on the %2$s site, <a href="%3$s">%4$s</a>, has just been edited by %5$s.', 'email-alerts' ), $post->post_type, $blog_name, $post_edit_link, $post->post_title, $post_edited_by ); ?><br /><br />

<p><small><?php _e( '(Email Alerts plugin)', 'email-alerts' ); ?></small></p>
