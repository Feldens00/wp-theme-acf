<?php

function dm_add_css_noticia() {
  echo '<style>
      .post-type-noticia #titlediv {
        display: none;
      }
    </style>';
}

add_action('admin_head', 'dm_add_css_noticia');
