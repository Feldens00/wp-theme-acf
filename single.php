<?php 
require_once(get_template_directory().'/util.php');
?>
<?php get_header(); ?>
<header class="header clear">
  <?php get_template_part('parts/item', 'top-bar'); ?>
  <?php get_template_part('parts/item', 'top-menu'); ?>
</header>
<main role="main">
	<div class="singlepage section-border-left border-green">
		<h1 class="text-center p-2 background-green">
			<img src="<?= get_template_directory_uri(). '/public/assets/images/noticias.svg' ?>">  
			NOTÍCIAS
		</h1>
	  <div class="breadcrumb-menu text-nowrap text-truncate">
	    <a class="inactive" href="<?= get_site_url() ?>">INICIO</a> / <a href="<?= get_site_url().'/'.get_post_type() ?>">NOTÍCIAS</a> / <?=the_title();?>
	  </div>
		<div class="p-sm-5">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article class="container py-2 cont-color" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="text-center">
						<img src="<?php the_field('imagem'); // Dynamic Content ?>" />
					</div>
					<div class="p-sm-5">
						<div class="text-center">
							<span class="mb-2 badge badge-<?php echo get_field('categoria'); ?>">
              	<?php echo catNoticias(get_field('categoria')); ?>
							</span>
							<h2 class="titulo">
								<?php the_title(); ?>
							</h2>
						</div>
						<div class="row">
							<div class="col-4">
								<div class="line"></div>
								<div class="date">
									<?php echo get_the_date('d ') . getMonthPT(get_the_date('m')) . get_the_date(' Y'); ?>
								</div>
							</div>
							<div class="col-8 text-right">
								<a href="http://facebook.com/share.php?u=<?php the_permalink() ?>&amp;t=<?php echo urlencode(the_title('','', false)) ?>" target="_blank" title="Compartilhar <?php the_title();?> no Facebook" class="redes-share facebook">
									<i class="fab fa-facebook-f fa-1x"></i>
								</a>
								<a href="http://twitter.com/intent/tweet?text=<?php the_title();?>&url=<?php the_permalink();?>&via=seutwitter" title="Twittar sobre <?php the_title();?>" target="_blank" class="redes-share twitter">
									<i class="fab fa-twitter fa-1x"></i>
								</a>
								<a href="whatsapp://send?text=Leia%20a%20noticia%20<?php the_title();?> <?php the_permalink();?>"  class="d-sm-none redes-share whatsapp">
									<i class="fab fa-whatsapp fa-1x"></i>
								</a>
								<a href="#" onClick="window.print()" class="redes-share print">
									<i class="fas fa-print"></i>
								</a>
							</div>
						</div>
						<hr>

						<?php the_field('texto'); // Dynamic Content ?>
						<?php the_content(); // Dynamic Content ?>
						
						<?php edit_post_link("Editar"); // Always handy to have Edit Post Links available ?>
					</div>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
				<article>
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</article>
			<?php endif; ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
