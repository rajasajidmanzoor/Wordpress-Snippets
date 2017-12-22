<?php

/** SHOW CUSTOM POST ON AUTHOR PAGE **/

function wpbrigade_author_custom_post_types( $query ) {
  if( is_author() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'my-custom-post-type-here'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'wpbrigade_author_custom_post_types' );