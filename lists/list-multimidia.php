<?php

require_once(get_template_directory().'/util.php');

$query_args = array(
    'post_type' => 'multimidia',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);

$midias = array();
while ($the_query->have_posts()) {
  $the_query->the_post();
  $midia['titulo'] = get_field('titulo');
  $arquivo = get_field('arquivo');

  $midia['url'] = $arquivo['url'];

  //verifica se é foto,audio o arquivo e atribui os icones
  if ($arquivo['type'] == "audio") {
    $midia['url-icone'] = get_template_directory_uri().'/public/assets/images/icone-audio.png';
  } else if ($arquivo['type'] == "image" ) {
    $midia['url-icone'] = get_template_directory_uri().'/public/assets/images/icone-imagem.png';
  } else if ($arquivo['type'] == "text" || $arquivo['type'] == "application"  ) {
    $midia['url-icone'] = get_template_directory_uri().'/public/assets/images/icone-documento.png';
  } else {
    $midia['url-icone'] = get_template_directory_uri().'/public/assets/images/icone-documento.png';
    $midia['url'] = get_field('link');
    if (get_field('miniatura')) {
      $midia['url-icone'] = get_field('miniatura');
    }
  }

  $midia['nome-arquivo'] = $arquivo['filename'];
  $midias[] = $midia;
}

?>

<section class="singlepage section-border-left border-red">
  <h1 class="text-center p-2 background-red">
    <img src="<?= get_template_directory_uri(). '/public/assets/images/multimidia.svg' ?>">
    MULTIMÍDIA
  </h1>
  <div class="breadcrumb-menu">
    <a class="inactive" href="<?= get_site_url() ?>">INICIO</a> / <a href="<?= get_site_url().'/'.get_post_type() ?>">MULTIMÍDIA</a>
  </div>
  <div class="p-sm-5">
    <div class="container py-2">
      <div class="row">
        <?php foreach ($midias as $linha):?>
        <div class="col-sm-4 p-1">
          <div class="px-3 cont-color">
            <div class="row">
              <div class="col-sm-7 image-multimidia my-4 text-center mx-0 p-">
                <a href="<?php echo $linha['url']; ?>" target="_blank"> 
                  <img src="<?php echo $linha['url-icone']; ?>" >
                </a>
              </div>
              <div class="col-sm-5 my-3">
                <div class="row">
                  <div class="col-md-12 col-6">
                    <p class="center-mobile hidden-big"><?php echo $linha['titulo']; ?></p>
                  </div>
                   <div class="col-md-12 col-6 center-mobile">
                    <a href="<?php echo $linha['url']; ?>" download="<?php echo $linha['url']; ?>"> <img src="<?= get_template_directory_uri().'/public/assets/images/download.svg'; ?>" class="img-responsive img-download"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div> 
    </div>
  </div>
</section>