<?php
require_once(get_template_directory().'/util.php');

$query_args = array(
    'post_type' => 'agenda',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);

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
<?php if ($the_query->have_posts()) : ?>
  <section class="agenda section-border-left">
    <div class="px-sm-5 p-3">
      <div class="row py-sm-5">
        <div class="col">
          <h2>
            <img src="<?= get_template_directory_uri(). '/public/assets/images/agenda.svg' ?>">  
            AGENDA
          </h2>
        </div>

        <div class="col">
          <a class="btn btn-outline-primary float-right" href="/agenda">
              ver tudo
          </a>
        </div>

      </div>
      <div class="owl-carousel owl-theme">
        <?php
          foreach ($agendas as $agenda) {
            set_query_var('categoria', $agenda['categoria']);
            set_query_var('titulo', $agenda['titulo']);
            set_query_var('data', $agenda['data']);
            get_template_part('sections/item', 'agenda-component');
          }
        ?>
      </div>
    </div>
  </section>
<?php endif ?>
