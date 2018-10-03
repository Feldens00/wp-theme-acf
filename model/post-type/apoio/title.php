<?php

function dm_add_title_apoio($data, $postarr) 
{
  $post_type = 'apoio';
  $atrr = $post_type.'-apoiador';

  if ($data['post_type'] == $post_type && $data['post_status'] == 'publish') {
    if ( $postarr['acf'][$atrr] ) {
      $title = $postarr['acf'][$atrr];
      $data['post_title'] = $title;
    }
  }

  return $data;
}

add_filter('wp_insert_post_data', 'dm_add_title_apoio', 10, 2 );
