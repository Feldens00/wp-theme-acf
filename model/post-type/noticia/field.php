<?php

require_once(get_template_directory().'/util.php');

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group(array(
    'key' => 'group_2',
    'title' => 'Notícia',
    'fields' => array (
      array (
        'key' => 'noticia-titulo',
        'label' => 'Título',
        'name' => 'titulo',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'maxlength' => 80,
      ),
      array (
        'key' => 'noticia-categoria',
        'label' => 'Categoria',
        'name' => 'categoria',
        'type' => 'select',
        'instructions' => '',
        'choices' => catNoticias(),
        'allow_null' => 0,
        'required' => 1,
        'maxlength' => 80,
      ),
      array (
        'key' => 'noticia-imagem',
        'label' => 'Imagem',
        'name' => 'imagem',
        'type' => 'image',
        'instructions' => 'Proporção sugerida: 3x4',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url', 
      ),
      array (
        'key' => 'noticia-texto',
        'label' => 'Texto da notícia',
        'name' => 'texto',
        'type' => 'wysiwyg', // or textarea
        /* (string) Specify which tabs are available. Defaults to 'all'.
        Choices of 'all' (Visual & Text), 'visual' (Visual Only) or text (Text Only) */
        'tabs' => 'all',
        /* (string) Specify the editor's toolbar. Defaults to 'full'.
        Choices of 'full' (Full), 'basic' (Basic) or a custom toolbar (https://www.advancedcustomfields.com/resources/customize-the-wysiwyg-toolbars/) */
        'toolbar' => 'full',
        'media_upload' => 1,
        'instructions' => '',
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'noticia',
        ),
      ),
    ),
    'style' => 'seamless',
  ));

}
