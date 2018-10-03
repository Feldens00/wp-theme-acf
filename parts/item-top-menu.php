<nav class="navbar navbar-expand-md top-menu px-sm-5">
  <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?= get_template_directory_uri().'/public/assets/images/logo.svg'; ?>" class="img-responsive img-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse " id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_site_url();?>">INÍCIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=strpos($_SERVER['REQUEST_URI'],'noticia') ? 'active' : ''?>" href="<?php echo get_site_url().'/noticia';?>">NOTÍCIAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=strpos($_SERVER['REQUEST_URI'],'multimidia') ? 'active' : ''?>" href="<?php echo get_site_url().'/multimidia'; ?>">MULTIMÍDIA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=strpos($_SERVER['REQUEST_URI'],'agenda') ? 'active' : ''?>" href="<?php echo get_site_url().'/agenda'; ?>">AGENDA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?=strpos($_SERVER['REQUEST_URI'],'fale-conosco') ? 'active' : ''?>" href="<?php echo get_site_url().'/fale-conosco'; ?>">FALE CONOSCO</a>
      </li>
    </ul>
  </div>
</nav>