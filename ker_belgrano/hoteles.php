<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="hoteles2">
	       <a href="http://kersantelmo.com.ar/" target="_blank" class="hidden-xs"><img src="KER_BELGRANO_Website/HOTELES/00_KER_BELGRANO_HOTELES_banner_san_telmo.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       <a href="http://recoleta.kerhoteles.com.ar/" target="_blank" class="hidden-xs"><img src="KER_BELGRANO_Website/HOTELES/00_KER_BELGRANO_HOTELES_banner_recoleta.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       <a href="http://urquiza.kerhoteles.com.ar/" target="_blank" class="hidden-xs"><img src="KER_BELGRANO_Website/HOTELES/00_KER_BELGRANO_HOTELES_banner_urquiza.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       
	       <a href="http://kersantelmo.com.ar/" target="_blank" class="hidden-md hidden-sm hidden-lg"><img src="KER_BELGRANO_Website/HOTELES/00_KER_BELGRANO_HOTELES_banner_san_telmo.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       <a href="http://recoleta.kerhoteles.com.ar/" target="_blank" class="hidden-md hidden-sm hidden-lg"><img src="KER_BELGRANO_Website/HOTELES/00_KER_BELGRANO_HOTELES_banner_recoleta.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       <a href="http://urquiza.kerhoteles.com.ar/" target="_blank" class="hidden-md hidden-sm hidden-lg"><img src="KER_BELGRANO_Website/HOTELES/00_KER_BELGRANO_HOTELES_banner_urquiza.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       
       </div>
        
        
        
        <?php include("footer.php");?>
<script src="js/jquery.bxslider1/jquery.bxslider.js"></script>
		<link rel="stylesheet" href="js/jquery.bxslider1/jquery.bxslider.css">
        
		
		<script>
	            $(document).ready(function(){
    $('.bxslider2').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: true
  	});
});
    
    $(document).ready(function(){
    $('.bxslider').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});

$(document).ready(function(){
    $('.bxslider3').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});
</script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">
<script>
		$(document).ready(function() {
		$('.carousel1').slick({
			
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});});
</script>
    </body>
</html>
