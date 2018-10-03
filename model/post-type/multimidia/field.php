<?php

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group(array(
    'key' => 'group_115667',
    'title' => 'Multimídia',
    'fields' => array (
      array (
        'key' => 'multimidia-titulo',
        'label' => 'Título',
        'name' => 'titulo',
        'type' => 'text',
        'instructions' => '',
        'maxlength' => 70,
      ),
      array (
        'key' => 'multimidia-link',
        'label' => 'Link',
        'name' => 'link',
        'type' => 'text',
        'instructions' => 'Inserir link para mídia',
        'maxlength' => 200,
      ),
      array (
        'key' => 'multimidia-miniatura',
        'label' => 'Miniatura',
        'name' => 'miniatura',
        'type' => 'image',
        'instructions' => 'Proporção sugerida: 3x4',
        'required' => 1,
        'max_size' => '', // 256KB
        'mime_types' => 'png, jpg,jpeg',
        'return_format' => 'url', 
      ),
      array(
        'key' => 'multimidia-arquivo',
        'label' => 'Arquivo',
        'name' => 'arquivo',
        'type' => 'file',
        'return_format' => 'array',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'min_size' => 0,
        'instructions' => 'Ou faça upload de arquivo ou insira um link.',
        'max_size' => '10MB',
        'mime_types' => '.txt,.text,.pdf,.pdf,.ppt,.ppz,.doc, .docx,.doc,.doc,.xls,.xlsx,.pptx,.jpg,.jpeg,.png,.svg,.gif,.mp2,.mp3,.mpa',
        
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'multimidia',
        ),
      ),
    ),
    'style' => 'seamless',
  ));

}
