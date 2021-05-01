
// slider active 
$(document).ready(function(){
    $('.slider-active').owlCarousel({
        loop:true,
        autoplay:true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    // testimonial antive
    $('.testimonils').owlCarousel({
        loop:true,
        autoplay:true,
        nav:true,
        center:true,
        responsive:{
            0:{
                items:3
            }
        }
    }) 
    
  });

  $(window).scroll(function(){
      if($(this).scrollTop() > 400){
          $('.scroll').addClass('.scrool-top');
      }else{
        $('.scroll').removeClass('.scrool-top');
      }
  });

