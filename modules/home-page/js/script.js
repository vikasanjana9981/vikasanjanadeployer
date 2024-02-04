jQuery(document).ready(function(){
    jQuery('.customerSlider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      speed: 300,
      infinite: true,
      autoplaySpeed: 5000,
      autoplay: true,
      prevArrow:"<img class='a-left control-c prev slick-prev' src='./image/arrow-prev.png'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='./image/arrow-next.png'>",
      responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
    });
  });

  jQuery(document).ready(function(){
    jQuery(".cartIcon").on("click", function() {
      jQuery(".cartSidebar").fadeToggle( "fast");
    });
    
  });