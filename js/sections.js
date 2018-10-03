
var noticiasCarousel = $('.noticias .owl-carousel');
if (noticiasCarousel) {
  noticiasCarousel.owlCarousel({
    //loop:true,
    margin:30,
    lazyLoad: true,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:4
      }
    }, 
    onInitialized: function(event) {
    }
  });
}

var agendaCarousel = $('.agenda .owl-carousel');
if (agendaCarousel.length) {
  agendaCarousel.owlCarousel({
    //loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        350:{
            items:2
        },
        700:{
            items:3
        },
        1200:{
            items:4
        }
    }
  });
}

var apoiosCarousel = $('.apoios .owl-carousel');
if (apoiosCarousel.length) {
  apoiosCarousel.owlCarousel({
    //loop:true,
    margin:30,
    //lazyLoad: true,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:3
      }
    }, 
    onInitialized: function(event) {
    }
  });
}
