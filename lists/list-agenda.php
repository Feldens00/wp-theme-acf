<?php

$query_args = array(
    'post_type' => 'agenda',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);

$array_categorias = array();
$agendas = array();
while ($the_query->have_posts()) {
  $the_query->the_post();
  $array_categorias[get_field('categoria')] = true;
  if ($_GET['cat'] == null || $_GET['cat'] == get_field('categoria')) {

    // Nao mostra eventos passados
    $event_date = strtotime(get_field('data', false, false));

    if ($event_date >= strtotime('today')) {
      $agenda = array(
        'categoria' => get_field('categoria'),
        'titulo' => get_field('titulo'),
        'data' => get_field('data', false, false)
      );
      $agendas[] = $agenda;
    }
  }
}

function sortByDate($a, $b) {
  return strtotime($a['data']) - strtotime($b['data']);
}
usort($agendas, 'sortByDate');

?>

<section class="singlepage listagem section-border-left border-red">
  <h1 class="text-center p-2 background-red">
    <img src="<?= get_template_directory_uri(). '/public/assets/images/agenda.svg' ?>">
    AGENDA
  </h1>
  <div class="breadcrumb-menu">
    <a class="inactive" href="<?= get_site_url() ?>">INICIO</a> / <a href="<?= get_site_url().'/'.get_post_type() ?>">AGENDA</a>
  </div>
  <div class="p-sm-5">
    <div class="container py-2 no-background">
      <div class="row">
        <div class="col-sm-8"> 
          <?php
            foreach ($agendas as $agenda) {
              foreach ($agenda as $key => $value) {
                set_query_var($key, $value);
              }
              get_template_part('sections/item', 'agenda-component');
            }
          ?>
        </div>
        <div class="col-sm-4 my-3 p-2 pl-5 categorias">
          <h3 class="mb-3">
            CATEGORIAS
          </h3>
          <?php foreach ($array_categorias as $categoria => $value) { ?>
            <p>
              <a href="?cat=<?=$categoria ?>" class="<?=$_GET['cat']==$categoria ? 'active' : '' ?>"><?php echo catAgenda($categoria); ?></a>
            </p>
          <?php } ?>
          <p>
            <a href="?cat=" class="<?=$_GET['cat'] ? '' : 'active' ?>">TODOS</a>
          </p>
        </div> 
      </div> 
    </div>
  </div>
</section>
