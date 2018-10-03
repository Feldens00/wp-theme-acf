<?php

function dm_add_css_agenda() {
  echo '<style>
      .post-type-agenda #titlediv {
        display: none;
      }
    </style>';
}

add_action('admin_head', 'dm_add_css_agenda');
