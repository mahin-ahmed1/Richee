jQuery(document).ready(function($){

  //MIXITUP JS START
var mixer = mixitup('.portfolio-list');

  //MIXITUP JS END

  //PROGRESS-BAR PLUGIN RUN
  $(".progress-bar").ProgressBar(); 
  

//PROGRESS CIRCLE WITH SCROLLING EFFECTS

 $(window).on('scroll',function(){
        if($(window).scrollTop()>=600){
         $('.circlechart').circlechart();

   }
   });

//ONE PAGE PLUGIN RUN
 $('.header-area .menu-item-type-custom .nav-link').onePgaeNav({
  wrapper: '.navbar-nav',
  speed: 400,
 });


//STICKY NAV WITH SCROLLING EFFECTS
 $(window).on('scroll',function(){

  if($(window).scrollTop()>=150 && !$('.header-area').hasClass('sticky')){
   $('.header-area').addClass('sticky');
   $('.sticky').slideDown();
  }


  else if($(window).scrollTop()<=80){
    
   $(".header-area").css("display","");
   if($('.header-area').hasClass('sticky')){
    $('.header-area').removeClass("sticky");
   }
  }

  else if($(window).scrollTop()<150 && $('.header-area').hasClass('sticky')){
  
   $('.header-area').removeClass("sticky");
  }

 });

//TOGGLE MENU SETTINGS

 $('.menu-btn-icon').click(function(){
  $('.nav-bar-area').toggle(400);

 })

$( window ).resize(function() {
     var wid=$(window).width();
     if(wid>992){
      $('.nav-bar-area').removeAttr('style');
     }
});



 //OWL CAROUSEL FOR TESTIMONIALS

 $(".owl-carousel").owlCarousel({

    autoplay:true,
    autoplayTimeout:4000,
    nav:true,
    items:3,
     responsiveClass:true,
          responsive:{
              // breakpoint from 0 up
              0:{
                  items:1,
                  nav:false,
                  dots:true
              },
              580:{
                items:1,
                nav:true,
                dots:false,
              },
              // breakpoint from 768 up
              768:{
                  items:2,
                  nav:true,
                  dots:false,
              },
              // breakpoint from 1000 up
              1000:{
                  items:3,
                  nav:true,
                  dots:false,
              }
          }
 });


 $('#menu-primary-menu li .nav-link').click(function(){
    $('li .nav-link').removeClass("active");
    $(this).addClass("active");
});

});
