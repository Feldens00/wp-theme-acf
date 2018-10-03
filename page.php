<?php get_header(); ?>
<header class="header clear">
  <?php get_template_part('parts/item', 'top-bar'); ?>
  <?php get_template_part('parts/item', 'top-menu'); ?>
</header>
<main role="main">
	<section class="singlepage section-border-left">
    <h1 class="text-center p-2">
      <?php the_title(); ?>
    </h1>
    <div class="p-sm-5">
      <div class="container py-2">
				<div class="row">
					<div>
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_content(); ?>
								<?php edit_post_link("Editar"); ?>
							</article>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>