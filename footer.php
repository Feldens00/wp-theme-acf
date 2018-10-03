    <?php get_template_part('sections/item', 'form-news'); ?>
    <footer role="contentinfo">
      <div class="container px-sm-5 mt-3">
        <div class="row">
          <div class="col-md-3  text-center">
            <a href="<?php echo home_url(); ?>">
              <img src="<?= get_template_directory_uri().'/public/assets/images/'; ?>" class="img-responsive img-logo">
            </a>
          </div>
          <div class="col-5 d-none d-lg-flex">
            <ul class="list-unstyled">
              <li><a href="<?php echo get_site_url();?>" class="nav-link">HOME</a></li>
              <li><a href="<?php echo get_site_url() . '/noticias';?>" class="nav-link">NOTÍCIAS</a></li>
            </ul>
          </div>
          <div class="col text-right p-3" id="div-redes">
            <div class="font-shabby">
              SIGA-NOS NAS REDES SOCIAIS
            </div>
            <div class="d-flex float-right">
              <div class="m-1">
                <a href="" class="nav-link btn-face">
                  <i class="fab fa-facebook"></i>
                </a>
              </div>
              <div class="m-1">
                <a href="" class="nav-link btn-twitter">
                  <i class="fab fa-twitter"></i>
                </a>
              </div>
              <div class="m-1">
                <a href="" class="nav-link btn-insta">
                  
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center col-md-2 offset-md-10" id="div-btn-contact">
          <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo get_site_url() . '/fale-conosco';?>';">fale conosco</i></button>
        </div>
        
        <div class="text-center col-sm-12 p-3">
          <button type="submit" class="btn btn-danger" id="btn-back-top"><i class="fas fa-angle-up fa-2x"></i></button>
        </div>
      
        <div class="text-center m-4 mb-5">
          <p class="copyright">
            Todos os direitos reservados &copy; 2018 <?php bloginfo('name'); ?>
          </p>
          <a href="" class="nav-link">
            <p>
              Desenvolvido por
            </p>
          </a>
        </div>
      </div>
      

      <div class="bottom-bar p-2"></div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
