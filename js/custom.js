$(".particles").jParticle({
    
    particlesNumber: 30,
    // Distance where link is full opacity

    linkDist: 50,
 
    // Distance where particles start linking.

    createLinkDist: 120,
 
    // disable links between particles

    disableLinks:false,

    // disable mouse interaction
    
    disableMouse:false,

    // background color
    
    background:'none',
 
     
 
    color:'white',

    // container's width/height

    width:null,
    
    height:null,

    // Links width in pixels

    linksWidth: 3,

    particle: {

 
      color:"white",

      minSize: 2,
 
      maxSize: 4,
 
      // animation speed

      speed: 60}
    
    
    });




$('.brand2').owlCarousel({
      loop:true,
      margin:20,
      nav:true,
      autoplay:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:8
          }
      }
  });


  $('.brand2').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:8
        }
    }
});



$('.brand3').owlCarousel({


    loop:true,
    margin:20,
    nav:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
});

    $( ".brand_btn_right" ).click(function() {
    var owl = $(".brand3").data('owlCarousel');
    owl.next()   // Go to next slide
});
$( ".brand_btn_left" ).click(function() {
    var owl = $(".brand3").data('owlCarousel');
    owl.prev()   // Go to previous slide
});


$( function() {
    $("#accordion").accordion({
        active:1,
        icons:{ header: "ui-icon-plus", activeHeader:"ui-icon-minus"}
    });
  } );

//   var tabEl = document.querySelector('button[data-bs-toggle="tab"]')
// tabEl.addEventListener('shown.bs.tab', function (event) {
//   event.target // newly activated tab
//   event.relatedTarget // previous active tab
// })