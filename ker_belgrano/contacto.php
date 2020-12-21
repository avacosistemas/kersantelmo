<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
        <div class="cabcontacto"><img src="KER_BELGRANO_Website/CONTACTO/KER_BELGRANO_CONTACTO_banner_01.jpg" alt="Banner_01"></div>
        
		
		<div class="botonreservar2 hidden-lg hidden-sm hidden-md">RESERVAR</div>
      				<div class="buscador2"><!--  -->
        <form action="https://reservations.travelclick.com/110467#/guestsandrooms" method="get" target="_blank">
	        <li class="item">
	        <select name="room">
		        <option>Tipo de habitación</option>
		        <option value="Classic Room">Classic</option>
		        <option value="Habitacion Superior">Superior</option>
		        <option value="Executive Room">Executive</option>
		        <option value="Habitacion Deluxe">Deluxe</option>
	        </select>
	        </li>
	        <li class="item"><input type="text" id="from" name="DateIn"/></li>
	        <li class="item"><input type="text" id="to" name="DateOut"/></li>
	        <li class="item">
	        <select name="Adults">
		        <option>Huespedes</option>
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
	        </select>
	        </li>
	        <li class="item"><input type="submit" value="RESERV&Aacute;"></li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
        </div>
        
        
       <div class="contacto_ker" id="contacto">
	       <div class="container">
	        <div class="col-md-6 col1">
		        <p>Vuelta de Obligado 2727,<br> (C1428ADS)<br>
Buenos Aires, Argentina<br> (54 11) 4789 9383

</p>
		 	<div class="" style="font-size:14px; color:#fff;">
			 	Ker Belgrano, está ubicado a tan sólo una cuadra de Avenida Cabildo en el corazón del barrio de Belgrano, a 40 minutos del Aeropuerto Internacional de Ezeiza
y 10 minutos del Aeroparque Jorge Newbery.<br><br>
El Barrio de Belgrano es uno de los barrios residenciales más pintorescos de la Ciudad. Posee gran cantidad de viejas e importantes casonas señoriales, la mayoría típicas de fines del siglo XIX. En contraste con estas construcciones, se han edificado modernos, sofisticados y espectaculares edificios de Empresas nacionales y multinacionales.<br><br>
<strong>Distancias en Automóvil:</strong><br><br>
Aeropuerto Internacional Ministro Pistarini : 40 minutos Aeroparque Jorge Newbery: 10 minutos<br>
Estación Retiro: 30 minutos<br>
Obelisco: 30 minutos<br>
Calle Florida: 30 minutos<br> Unicenter Shopping: 15 minutos <br>DOT Baires Shopping: 10 minutos<br> Tigre: 30 minutos<br>
La Boca / San Telmo: 35 minutos<br><br>
Al Centro en:<br><br>
A 100 mts del hotel, Subte Línea D: Estación Congreso de Tucumán, 30 minutos.<br><br>
<strong>Distancias en Automóvil:</strong><br><br>
Aeropuerto Internacional Ministro Pistarini: 40 minutos Aeroparque Jorge Newbery: 20 minutos<br>
Estación Retiro: 30 minutos<br>
Obelisco: 30 minutos<br>
Calle Florida: 30 minutos Unicenter Shopping: 10 minutos DOT Baires Shopping: 5 minutos Tigre: 25 minutos<br>
La Boca / San Telmo: 35 minutos<br><br>
Al Centro en:<br><br>
Subte Línea B, Estación Juan Manuel de Rosas: 30 minutos. Tren Línea Mitre: Estación V. Urquiza: 30 minutos
		 	</div>
	        </div>
	        <div class="col-md-6 col2">
		        <form action="enviar.php" method="post">
		        <h1><span>Contacto</span></h1>
		        <label>Asunto</label>
		        <input type="text" name="asunto" value="<?php echo $_GET['tipo']; ?>" style="text-transform:capitalize;">
		        <label>Nombre y apellido</label>
		        <input type="text" name="nombre" required>
		        <label>Email</label>
		        <input type="email" name="email" required>
		        <label>Teléfono</label>
		        <input type="text" name="tel">
		        <label>Tipo de respuesta</label>
		        <input type="radio" value="email" name="radioemail"> Email
		        <label>Tu mensaje</label>
		        <textarea name="mensaje" rows="6"></textarea>
		        <div class="left">Políticas de privacidad <a href="">click acá</a></div>
		        <div class="right"><input type="submit" value="ENVIAR"></div>
		        <div class="clear"></div>
                <?php if(isset($_REQUEST['tipo']) && $_REQUEST['tipo'] !=''){ ?>
						<input type="hidden" name="tipo" value="<?php echo $_REQUEST['tipo']; ?>" />
				
                <?php } ?>
                
                </form>
	        </div>
	        <div class="clear"></div>
	        </div>
        </div> 
        
        <div class="hoteles">
	        
	        
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <a href="https://kersantelmo.com.ar" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_San_Telmo_logo.png">
		        
		        
		        </a>
	        </div>
	        
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
		        <a href="http://recoleta.kerhoteles.com.ar/" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_Recoleta_logo.png">
		        
		        
		        </a>
	        </div>	        
	        
	        <div class="col-md-4 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <a href="http://urquiza.kerhoteles.com.ar/" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_Urquiza_logo.png">
		        
		        
		        </a>
	        </div>
	        
	        
	        
	        <div class="clear"></div>
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
