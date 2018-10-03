<?php

function dm_add_post_type_noticia() 
{
  $singular = 'notícia';
  $singularCameo = 'Notícia';
  $slug = 'noticia';
  $genderChar = 'a'; 

  $labels = array(
  'name'            => _x($singularCameo.'s', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name' => _x($singular, 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'     => _x($singularCameo.'s', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'=> _x($singularCameo, 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'       => _x('Adicionar nov'.$genderChar.' ', $slug, 'your-plugin-textdomain' ),
    'add_new_item'  => __('Adicionar nov'.$genderChar.' '.$singular, 'your-plugin-textdomain' ),
    'new_item'      => __('Nov'.$genderChar.' '.$singular, 'your-plugin-textdomain' ),
    'edit_item'     => __('Editar '.$singular, 'your-plugin-textdomain' ),
    'view_item'     => __('Ver '.$singular, 'your-plugin-textdomain' ),
    'all_items'     => __('Tod'.$genderChar.'s '.$genderChar.'s '.$singular.'s', 'your-plugin-textdomain' ),
    'search_items'  => __('Pesquisar '.$singular.'s', 'your-plugin-textdomain' ),
    'parent_item_colon'=> __($singularCameo.'s similares:', 'your-plugin-textdomain' ),
    'not_found'     => __('Nenhum '.$singular.' encontrad'.$genderChar.'.', 'your-plugin-textdomain' ),
    'not_found_in_trash'=> __('Nenhum '.$singular.' encontrad'.$genderChar.' na lixeira.', 'your-plugin-textdomain' )
  );
  
  $args = array(
    'labels'       => $labels,
    'description'  => __('Description.', 'your-plugin-textdomain'),
    'public'       => true,
    'publicly_queryable' => true,
    'show_ui'      => true,
    'show_in_menu' => true,
    'query_var'    => true,
    'rewrite'      => array('slug' => $slug),
    'map_meta_cap' => true,
    'has_archive'  => true,
    'hierarchical' => false,
    'menu_position'=> null,
    'supports'     => array('title'),
    'menu_icon'    => 'dashicons-format-aside' 
  );

  register_post_type($slug, $args);
}

add_action('init', 'dm_add_post_type_noticia');
