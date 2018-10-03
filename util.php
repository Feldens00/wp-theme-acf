<?php

function slugify($text)
{
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, '-');
  $text = preg_replace('~-+~', '-', $text);
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function addHttp($url) {
  if (!$url) {
    return;
  }
  return strpos($url, 'http') !== false ? $url : 'http://'.$url;
}

function addSocial($str, $site = null, $site_name = null) {
  if (!$str) {
    return;
  }
  $url = strpos($str, $site_name) !== false ? $str : $site.$str;
  return addHttp($url);
}

function getMonthPT($month) {
  $months = array('','Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez');
  return $months[intval($month)];
}

function catNoticias($cat = null) {
  $arr = array(
    'noticia' => 'Notícia',
    'artigo' => 'Artigo',
  );
  return $cat ? $arr[$cat] : $arr;
}

function catAgenda($cat = null) {
  $arr = array(
    'cat1' => 'Categ 1',
    'cat2' => 'Categ 2',
  );
  return $cat ? $arr[$cat] : $arr;
}

function catMultimidia($cat = null) {
  $arr = array(
      'imagem' => 'Imagem',
      'documento' => 'Documento',
      'audio' => 'Audio'
  );
  return $cat ? $arr[$cat] : $arr;
}