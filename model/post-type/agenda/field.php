<?php

require_once(get_template_directory().'/util.php');

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group(array(
    'key' => 'group_3',
    'title' => 'Agenda',
    'fields' => array (
      array (
        'key' => 'agenda-titulo',
        'label' => 'Título',
        'name' => 'titulo',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'maxlength' => 90,
      ),
      array (
        'key' => 'agenda-categoria',
        'label' => 'Categoria',
        'name' => 'categoria',
        'type' => 'select',
        'instructions' => '',
        'choices' => catAgenda(),
        'allow_null' => 0,
        'required' => 1,
        'maxlength' => 80,
      ),
      array (
        'key' => 'agenda-data',
        'label' => 'Data',
        'name' => 'data',
        'type' => 'date_time_picker',
        'required' => 1,
        'instructions' => '',
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'agenda',
        ),
      ),
    ),
    'style' => 'seamless',
  ));

}
