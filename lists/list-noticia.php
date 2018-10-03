<?php
require_once(get_template_directory().'/util.php');

$query_args = array(
    'post_type' => 'noticia',
    'post_status' => 'publish',
    'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);

$array_categorias = array();
$noticias = array();
while ($the_query->have_posts()) {
  $the_query->the_post();
  $array_categorias[get_field('categoria')] = true;
  if ($_GET['cat'] == null || $_GET['cat'] == get_field('categoria')) {

    $noticia = array(
      'categoria' => get_field('categoria'),
      'imagem' => get_field('imagem'),
      'permalink' => get_the_permalink(),
      'titulo' => get_field('titulo'),
      'data' => get_the_date('d ') . getMonthPT(get_the_date('m')) . get_the_date(' Y')
    );

    $noticias[] = $noticia;
  }
}

?>

<section class="singlepage listagem section-border-left border-green">
  <h1 class="text-center p-2 background-green">
    <img src="<?= get_template_directory_uri(). '/public/assets/images/noticias.svg' ?>">  
    NOTÍCIAS
  </h1>
  <div class="breadcrumb-menu">
    <a class="inactive" href="<?= get_site_url() ?>">INICIO</a> / <a href="<?= get_site_url().'/'.get_post_type() ?>">NOTÍCIAS</a>
  </div>
  <div class="p-sm-5">
    <div class="container py-2 no-background">
      <div class="row">
        <div class="col-sm-8"> 
          <?php foreach ($noticias as $noticia): ?>
            <div class="item row p-2 cursor-pointer" onCLick="window.location = '<?= $noticia['permalink']; ?>'">
              <div class="col-sm-3 image text-center mb-2">
                <img src="<?php echo $noticia['imagem']; ?>" alt="Foto da notícia">
              </div>
              <div class="col-sm-9 px-2 info">
                <span class="badge badge-<?php echo $noticia['categoria']; ?>">
                  <?php echo catNoticias($noticia['categoria']); ?>
                </span>
                <p class="mt-1 text-nowrap text-truncate">
                  <?php echo $noticia['titulo']; ?>
                </p>
                <div class="post-date">
                  <div class="line"></div>
                  <?php echo $noticia['data']; ?>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
        <div class="col-sm-4 my-3 p-2 pl-5 categorias">
          <h3 class="mb-3">
            CATEGORIAS
          </h3>
          <?php foreach ($array_categorias as $categoria => $value) { ?>
            <p>
              <a href="?cat=<?=$categoria ?>" class="<?=$_GET['cat']==$categoria ? 'active' : '' ?>"><?php echo catNoticias($categoria); ?></a>
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
