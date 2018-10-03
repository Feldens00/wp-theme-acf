<?php

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group(array(
    'key' => 'group_1',
    'title' => 'Banner',
    'fields' => array (
      array (
        'key' => 'banner-titulo',
        'label' => 'Título',
        'name' => 'titulo',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'maxlength' => 80,
      ),
      array (
        'key' => 'banner-desktop',
        'label' => 'Imagem para desktop',
        'name' => 'desktop',
        'type' => 'image',
        'instructions' => 'Proporção sugerida: 18x9',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url', 
      ),
      array (
        'key' => 'banner-mobile',
        'label' => 'Imagem para mobile',
        'name' => 'mobile',
        'type' => 'image',
        'instructions' => '',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'banner',
        ),
      ),
    ),
    'style' => 'seamless',
  ));
}
