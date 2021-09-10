$( window ).on('scroll', function(){
    var scrollTop = $(this).scrollTop()
    var score = '15px'
    if (scrollTop > 1) {
        score = '5px 15px'
    }
    $('#navbar').css('padding', score)
});



$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        stagePadding: 20,
        loop:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                
            }
        }
    });
  });
  




// $(document).ready(function(){
//     $(".owl-carousel").owlCarousel();
//   });




//   $('.owl-carousel').owlCarousel({
//     center: true,
//     loop:false,

//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:2,
//             nav:false
//         },
//         600:{
//             items:2,
//             nav:false
//         },
//         1000:{
//             items:3,
//         }
//     }
// })