<?php
$tem_pagina_interna = array(
    'noticia', 'page'
);
?>

<?php get_header(); ?>
  <header class="header clear">
    <?php get_template_part('parts/item', 'top-bar'); ?>
    <?php get_template_part('parts/item', 'top-menu'); ?>
  </header>
    <main role="main">
        <div class="container p-sm-5 my-5 page-white-content search-page">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div 
                        <?php 
                        $pointer = '';
                        if (in_array(get_post_type(),$tem_pagina_interna)) {
                                ?>onCLick="window.location = '<?=the_permalink()?>'"<?php
                                $pointer = 'pointer';
                            }
                            ?>
                            class="cont-color my-3 p-2 <?=$pointer ?>" >
                        <div class="row">
                            <div class="col-sm-2">
                                <span class="badge badge-<?php echo get_post_type(); ?>">
                                  <?php echo get_post_type(); ?>
                                </span>
                            </div>
                            <div class="col-sm-10">
                                 <h5><?php the_title(); ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                        <?php else : ?>
                            <div class="col-sm-12 cont-color my-3 py-5 text-center">
                                <div class="col-sm-12 py-4">
                                   <img class="img-responsive img-error-search" src="<?= get_template_directory_uri().'/public/assets/images/info.svg'; ?>">
                                </div>
                                <div class="col-sm-12 py-4">
                                    <h4>NÃO ENCONTRAMOS NENHUM RESULTADO CORRESPONDENTE A "<?php the_search_query(); ?>".</h4>
                                </div>
                                <div class="col-sm-12 text-left">
                                    <p>Sugestão:</p>
                                    <ul>
                                        <li>Cerifique-se de que todas as palavras estejam escritas corretamente.</li>
                                        <li>Tente palavras-chave diferentes.</li>
                                        <li>Tente palavras-chave mais genéricas.</li>
                                    </ul>
                                </div>
                                
                            </div>
                        <?php endif;?>
                </div>
                <div class="col-sm-4 p-3 px-5">
                    <h4>PESQUISE NO SITE</h4>
                    <?php get_template_part('parts/item', 'search-form'); ?>
                </div>
            </div>    
        </div>
    </main>
<?php get_footer(); ?>