<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
        <div class="hidden-xs">
        <ul class="bxslider2"><!-- slider -->
		<li><img src="img_recoleta/HABITACIONES/KER_RECOLETA_HABITACIONES_banner01.jpg" alt="KER_BELGRANO_HABITACIONES_banner_01" /></li>
		<li><img src="img_recoleta/HABITACIONES/KER_RECOLETA_HABITACIONES_banner02.jpg" alt="KER_BELGRANO_HABITACIONES_banner_01" /></li>
		</ul><!-- slider -->
		</div>
		
		<div class="hidden-md hidden-lg hidden-sm">
		<ul class="bxslider"><!-- slider -->	
		<li><img src="img_recoleta/HABITACIONES/KER_RECOLETA_HABITACIONES_banner01.jpg" alt="KER_BELGRANO_HABITACIONES_banner_01" /></li>
		<li><img src="img_recoleta/HABITACIONES/KER_RECOLETA_HABITACIONES_banner02.jpg" alt="KER_BELGRANO_HABITACIONES_banner_01" /></li>
		</ul><!-- slider -->
		</div>
		
		
	        
        <div class="habitaciones_detalle">
	        <div class="container">
		        <div class="col-md-12"><h1>HABITACI&Oacute;N <span>CLASSIC</span></h1></div>
	        <div class="col-md-8 borde">
		        <div class="carousel1">
				        <div class="item"><img src="img_recoleta/HABITACIONES/KER_RECOLETA_HABITACIONES_classic_01.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
				        <div class="item"><img src="img_recoleta/HABITACIONES/KER_RECOLETA_HABITACIONES_classic_02.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
				        <div class="item"><img src="img_recoleta/HABITACIONES/KER_RECOLETA_HABITACIONES_classic_03.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
			        </div>
			        <h2>HABITACI&Oacute;N <span>CLASSIC</span></h2>
		        <p>
			        Confortables habitaciones Deluxe de 21m2 con cama King Size o dos camas Twin (SGL / DWL).
Ideales tanto para una como para dos personas.<br> Smart TV 32”.<br>
Internet WIFI.<br>
Aire acondicionado Frío/ Calor individual.<br>
Frigobar.<br>
Pava eléctrica.<br>
Escritorio.<br>
Cajas de seguridad.<br>
Secador de cabello.<br>
Vidrios doble con cámara de aire (DVH).<br>
Detectores de humo.<br><br>
CATEGORÍAS DE HABITACIONES: Standard Sgl y Dbl/ Standard Tpl/ Classis Cdple<br>
		        </p>
	        </div>
	        <div class="col-md-4">
		        
		        <div class="buscador_detalle"><!--  -->
		        <h3>RESERVAR <span>AHORA</span>
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank">
	        <li class="item">
	        <select name="RoomTypeID">
		        <option>Tipo de habitación</option>
		        <option value="484905">Classic</option>
		        <option value="484906">Executive</option>
		        <option value="484907">Family</option>
		        <option value="484908">Suite</option>
	        </select>
	        </li>
	        <li class="item"><input type="text" id="from" name="DateIn"/></li>
	        <li class="item"><input type="text" id="to" name="DateOut"/></li>
	        <li class="item">
	        <select name="Adults">
		        <option>Huespedes</option>
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
	        </select>
	        </li>
	        <li class="item"><input type="submit" value="RESERV&Aacute;"></li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
	        </div>
	        <div class="clear"></div>
	        </div>
	        <img src="KER_BELGRANO_Website/KER_BELGRANO_Habitaciones_Fichas_Standard.jpg" alt="01Standard_Banner_inferior_Standard" class="foto img-responsive">
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
