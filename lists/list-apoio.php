<?php
require_once(get_template_directory().'/util.php');

$query_args = array(
    'post_type' => 'apoio',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);

$array_categorias = array();
$apoios = array();
while ($the_query->have_posts()) {
  $the_query->the_post();
  $array_categorias[get_field('categoria')] = true;
  if ($_GET['cat'] == null || $_GET['cat'] == get_field('categoria')) {

    $apoio = array(
      'youtube' => get_field('youtube'),
      'imagem' => get_field('imagem'),
      'apoiador' => get_field('apoiador'),
      'apoiador-detalhes' => get_field('apoiador-detalhes'),
      'texto' => get_field('texto')
    );

    $apoios[] = $apoio;
  }
}

?>

<section class="singlepage listagem section-border-left border-yellow">
  <h1 class="text-center p-2 background-yellow">
    <img src="<?= get_template_directory_uri(). '/public/assets/images/apoios.svg' ?>">  
    APOIOS
  </h1>
  <div class="breadcrumb-menu">
    <a class="inactive" href="<?= get_site_url() ?>">INICIO</a> / <a href="<?= get_site_url().'/'.get_post_type() ?>">APOIOS</a>
  </div>
  <div class="p-sm-5">
    <div class="container py-2 no-background">
      <div class="row">
        <div class="col-sm-8"> 
          <?php foreach ($apoios as $apoio): ?>
            <div class="item row p-2">
              <div class="col-sm-5 full-image text-center mb-2">
                <?php if ($apoio['youtube']) : ?>
                  <iframe class="embed-responsive-item" src="<?php echo str_replace('watch?v=','embed/',$apoio['youtube']); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  
                <?php else: ?>
                  <img src="<?php echo $apoio['imagem']; ?>">
                <?php endif; ?>
              </div>
              <div class="col-sm-7 px-2">
                <div class="ml-2">
                  <p class="mb-0 color-yellow-dark">
                    <?php echo $apoio['apoiador']; ?>
                  </p>
                  <span class="small">
                    <?php echo $apoio['apoiador-detalhes']; ?>
                  </span>

                  <p class="mt-2">
                    <?php echo $apoio['texto']; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
        <!--
        <div class="col-sm-4 my-3 p-2 pl-5 categorias">
          <h3 class="mb-3">
            CATEGORIAS
          </h3>
          <p>
            <a href="?cat=" class="<?=$_GET['cat'] ? '' : 'active' ?>">TODOS</a>
          </p>
        </div> 
      -->
      </div>
    </div>
  </div>
</section>
