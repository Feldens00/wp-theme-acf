<?php get_header(); ?>
  <header class="header clear">
    <?php get_template_part('parts/item', 'top-bar'); ?>
    <?php get_template_part('parts/item', 'top-menu'); ?>
  </header>
  <main role="main">
    <?php get_template_part('sections/item', 'banner-header'); ?>
    <?php get_template_part('sections/item', 'noticias'); ?>
    <?php get_template_part('sections/item', 'agenda'); ?>
    <?php get_template_part('sections/item', 'apoios'); ?>
    <?php get_template_part('sections/item', 'banner-footer'); ?>
  </main>
<?php get_footer(); ?>
