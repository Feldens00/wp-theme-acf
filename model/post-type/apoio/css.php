<?php

function dm_add_css_apoio() {
  echo '<style>
      .post-type-apoio #titlediv {
        display: none;
      }
    </style>';
}

add_action('admin_head', 'dm_add_css_apoio');
