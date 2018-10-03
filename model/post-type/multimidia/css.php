<?php

function dm_add_css_multimidia() {
  echo '<style>
      .post-type-multimidia #titlediv {
        display: none;
      }
    </style>';
}

add_action('admin_head', 'dm_add_css_multimidia');
