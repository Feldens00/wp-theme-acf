<?php

function dm_add_css_banner() {
  echo '<style>
      .post-type-banner #titlediv {
        display: none;
      }
    </style>';
}

add_action('admin_head', 'dm_add_css_banner');
