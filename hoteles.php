<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="hoteles2">
	       <a href="http://kerrecoleta.com.ar/" target="_blank" class="hidden-xs"><img src="img/00_KER_RECOLETA_HOTELES_banner_recoleta.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       <a href="http://kerbelgrano.com.ar/" target="_blank" class="hidden-xs"><img src="img/00_KER_RECOLETA_HOTELES_banner_belgrano.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       <a href="http://kerurquiza.com.ar/" target="_blank" class="hidden-xs"><img src="img/00_KER_RECOLETA_HOTELES_banner_urquiza.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       
	       
	       <a href="http://kerrecoleta.com.ar/" target="_blank" class="hidden-md hidden-sm hidden-lg"><img src="img/00_KER_RECOLETA_HOTELES_banner_recoleta.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	      
	       <a href="http://kerbelgrano.com.ar/" target="_blank" class="hidden-md hidden-sm hidden-lg"><img src="img/00_KER_RECOLETA_HOTELES_banner_belgrano.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
	       <a href="http://kerurquiza.com.ar/" target="_blank" class="hidden-md hidden-sm hidden-lg"><img src="img/00_KER_RECOLETA_HOTELES_banner_urquiza.jpg" alt="KER_Mapadesitio_Urban_Color" /></a>
       </div>
        
        
					  
<!--  SE AGREGA BOTON DE WHATSAPP   -->

<div >
        <a href="https://api.whatsapp.com/send?phone=5491130174497&text=Hola!%20Me%20contacto%20a%20través%20de%20la%20web%20y%20me%20gustaría%20realizar%20una%20consulta" target="_blank">
            <img class="btn-whatsapp" src="img/icons/icon-wsp.png" alt="">
        </a>
    </div>

<!--  SE AGREGA BOTON DE WHATSAPP   -->
        
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
