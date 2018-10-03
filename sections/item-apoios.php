<?php
$query_args = array(
    'post_type' => 'apoio',
    'post_status' => 'publish',
    'posts_per_page' => 6
);
$the_query = new WP_Query($query_args);

?>
<?php if ($the_query->have_posts()) : ?>
  <section class="apoios section-border-left">
    <div class="px-sm-5 p-3">
      <div class="row py-sm-5">
        <div class="col">
          <h2 class="">
            <img src="<?= get_template_directory_uri(). '/public/assets/images/apoios.svg' ?>">  
            APOIOS
          </h2>
        </div>

        <div class="col">
          <a class="btn btn-outline-primary float-right" href="/apoio">
            ver tudo
          </a>
        </div>

      </div>
      <div class="owl-carousel owl-theme">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="item p-3">
            <div class="text-center video">
              <?php if (get_field('youtube')) : ?>
                <iframe width="280" height="245" src="<?php echo str_replace('watch?v=','embed/',get_field('youtube')); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>  
              <?php else: ?>
                <p class="texto m-sm-4 m-2 mr-3">
                  <?php echo get_field('texto'); ?>  
                </p>
                <?php if (get_field('imagem')) : ?>
                  <div class="thumbnail">
                    <img src="<?php echo get_field('imagem'); ?>" alt="Foto">
                  </div>
                <?php endif; ?>
              <?php endif; ?>
            </div>
            <div class="apoiador pl-2">
              <p class="mt-3 mb-0">
                <?php echo get_field('apoiador'); ?>
              </p>
              <span class="small">
                <?php echo get_field('apoiador-detalhes'); ?>
              </span>
            </div>
          </div>
        <?php endwhile ?>
      </div>
    </div>
  </section>
<?php endif ?>
