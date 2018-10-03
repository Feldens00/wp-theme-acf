<?php

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group(array(
    'key' => 'group_4',
    'title' => 'Apoio',
    'fields' => array (
      array (
        'key' => 'apoio-apoiador',
        'label' => 'Nome do apoiador',
        'name' => 'apoiador',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'maxlength' => 50,
      ),
      array (
        'key' => 'apoio-detalhes',
        'label' => 'Profissão ou detalhes do apoiador',
        'name' => 'apoiador-detalhes',
        'type' => 'text',
        'instructions' => '',
        'maxlength' => 60,
      ),
      array (
        'key' => 'apoio-youtube',
        'label' => 'Link para vídeo no Youtube',
        'name' => 'youtube',
        'type' => 'text',
        'instructions' => 'O apoio deve conter ou um vídeo ou um texto e uma imagem.',
      ),
      array (
        'key' => 'apoio-imagem',
        'label' => 'Imagem',
        'name' => 'imagem',
        'type' => 'image',
        'instructions' => 'O apoio deve conter ou um vídeo ou um texto e uma imagem. Proporção sugerida: 3x4',
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url', 
      ),
      array (
        'key' => 'apoio-texto',
        'label' => 'Texto',
        'name' => 'texto',
        'type' => 'text',
        'instructions' => 'O apoio deve conter ou um vídeo ou um texto e uma imagem.',
        'maxlength' => 400,
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'apoio',
        ),
      ),
    ),
    'style' => 'seamless',
  ));

}
