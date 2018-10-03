<?php
require_once(get_template_directory().'/util.php');

$query_args = array(
    'post_type' => 'noticia',
    'post_status' => 'publish',
    'posts_per_page' => 6
);
$the_query = new WP_Query($query_args);

?>
<?php if ($the_query->have_posts()) : ?>
  <section class="noticias section-border-left">
    <div class="px-sm-5 p-3">
      <div class="row py-sm-5">
        <div class="col">
          <h2 class="">
            <img src="<?= get_template_directory_uri(). '/public/assets/images/noticias.svg' ?>">  
            NOTÍCIAS
          </h2>
        </div>

        <div class="col">
          <a class="btn btn-outline-primary float-right" href="/noticia">
              ver tudo
          </a>
        </div>

      </div>
      <div class="owl-carousel owl-theme">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="item text-center p-3" onCLick="window.location = '<?php the_permalink(); ?>'">
            <div class="thumbnail">
              <img class="owl-lazy" data-src="<?php echo get_field('imagem'); ?>" alt="Foto da notícia">  
            </div>  
            <p class="mt-3">
              <?php echo get_field('titulo'); ?>
            </p>
            <div class="post-date">
              <div class="line"></div>
              <?php echo get_the_date('d ') . getMonthPT(get_the_date('m')) . get_the_date(' Y'); ?>
            </div>
            <span class="badge badge-<?php echo get_field('categoria'); ?>">
              <?php echo catNoticias(get_field('categoria')); ?>
            </span>
          </div>
        <?php endwhile ?>
      </div>
    </div>
  </section>
<?php endif ?>
