<?php
$query_args = array(
  'post_type' => 'banner',
  'post_status' => 'publish',
  'posts_per_page' => -1
);
$the_query = new WP_Query($query_args);
?>

<?php if ($the_query->have_posts()) : ?>
  <section class="banner d-none d-lg-block">
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <?php if (get_field('titulo') == 'Banner-rodape') : ?>
        <img src="<?php echo get_field('desktop'); ?>">
      <?php endif ?>
    <?php endwhile ?>
  </section>
<?php endif ?>