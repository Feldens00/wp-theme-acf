<?php
/* Template name: fale-conosco */
?>

<?php get_header(); ?>
<header class="header clear">
  <?php get_template_part('parts/item', 'top-bar'); ?>
  <?php get_template_part('parts/item', 'top-menu'); ?>
</header>
<main role="main">
  <section class="singlepage section-border-left border-green">
    <h1 class="text-center p-2 background-green">
      <img src="<?= get_template_directory_uri(). '/public/assets/images/fale-conosco.svg' ?>">  
      <?php the_title(); ?>
    </h1>
    <div class="breadcrumb-menu">
      <a class="inactive" href="<?= get_site_url() ?>">INICIO</a> / <a href="<?= get_site_url().'/'.get_post_type() ?>"><?php the_title(); ?></a>
    </div>
    <div class="p-sm-5">
      <div class="container py-2 cont-color">
        <div>
          <?php the_post(); ?>
          <?php the_content(); ?>
          <?php edit_post_link("Editar"); ?>
        </div>
        <div>
          <form method="POST" action="" id="form-contact">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome Sobrenome" required="true">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="name@example.com" required="true">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Telefone</label>
              <input type="text" class="form-control phone" name="telefone" placeholder="(99) 99999 - 9999" required="true">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mensagem</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3" required="true"></textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-danger">enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>