<?php

function dm_add_title_agenda($data, $postarr) 
{
  $post_type = 'agenda';
  $atrr = $post_type.'-titulo';

  if ($data['post_type'] == $post_type && in_array($data['post_status'], array('publish','auto-draft','future'))) {
    if ( $postarr['acf'][$atrr] ) {
      $title = $postarr['acf'][$atrr];
      $data['post_title'] = $title;
    }
  }

  return $data;
}

add_filter('wp_insert_post_data', 'dm_add_title_agenda', 10, 2 );
