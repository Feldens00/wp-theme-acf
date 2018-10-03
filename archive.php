<?php get_header(); ?>
<header class="header clear">
  <?php get_template_part('parts/item', 'top-bar'); ?>
  <?php get_template_part('parts/item', 'top-menu'); ?>
</header>
<main role="main">
  <?php get_template_part('lists/list', get_post_type()); ?>
</main>
<?php get_footer(); ?>