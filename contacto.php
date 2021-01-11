<?php include("header.php");?>
        
        
      				
      				
      				
<?php include("mensaje_whatsapp.php");?>			
        
        
        <div class="cabcontacto"><img src="img/_Contacto/Banner_01.jpg" alt="Banner_01"></div>
        
		
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
        <div class="covid" style="background-color:#A6A6A4; text-align:center; font-size:16px;"><a href="KER_Protocolo_Covid-19.pdf" target="_blank" style="color:#fff; display:block; padding:15px;">VER PROTOCOLO COVID-19 | Programa Stay Safe in Ker</a></div>
        
       <div class="contacto_ker" id="contacto">
	       <div class="container">
	        <div class="col-md-6 col1">
		        <p><span style="font-size:21px;">Av. Paseo Colón 455,<br>
(C1063ACE) San Telmo<br>
Buenos Aires - Argentina<br>
(54 11) 5277 4600</span><br>
<a href="mailto:reservassantelmo@kerhoteles.com.ar" style="color:#fff; font-size:21px;">reservassantelmo@kerhoteles.com.ar</a><br><br>
San Telmo es uno de los barrios más antiguos y tradicionales de Buenos Aires.<br><br>
Desde Ker San Telmo se puede llegar caminando a los diferentes puntos turísticos de la
ciudad de Buenos Aires. Los mas destacados: Casa Rosada (Casa de Gobierno) y Plaza
de Mayo a tan solo 400 metros, Puerto Madero a 300 metros, Mercado de antiguedades
de San Telmo a 800 metros y calle peatonal Florida a 800 metros.<br><br>  
En Plaza de Mayo (a 4 00 metros del hotel) se encuentran las lineas de subtes A, D y E
que permiten conectar con la ciudad y sus alrededores. Y sobre la Avenida Paseo Colón
se encuentra el Metro Bus del Bajo con varias lineas de Colectivos de corta distancia.<br><br>

<strong>Distancias en automóvil desde el hotel a:</strong><br><br>
Casa Rosada: 2 minutos<br>
Cabildo: 3 minutos<br>
CCK: 3 minutos<br>
Luna Park: 3 minutos<br>
Puerto Madero: 2 minutos<br>
Mercado de San Telmo: 7 minutos<br>
Plaza Dorrego-San Telmo: 6 minutos<br>
Recoleta: 14 minutos<br>
La Boca-Caminito: 11 minutos<br>
La Usina del Arte: 6 minutos<br>
Buquebus: 8 minutos<br>
Aeropuerto Internacional Ministro Pistarini: 35 minutos
Aeroparque Jorge Newbery: 25 minutos<br>
Estación de micros (Retiro): 15 minutos</p>
<!--<img src="img/_Contacto/Imagen_Lateral.jpg" alt="Imagen_Lateral" class="foto">-->
	        </div>
	        <div class="col-md-6 col2">
		        <form action="enviar.php" method="post">
		        <h1><span>Contacto</span></h1>
		        <label>Asunto</label>
		        <input type="text" name="asunto" value="<?php echo $_GET['tipo']; ?> - <?php echo $_GET['salon']; ?>" style="text-transform:capitalize;">
		        <label>Nombre y apellido</label>
		        <input type="text" name="nombre" required>
		        <label>Email</label>
		        <input type="email" name="email" required>
		        <label>Teléfono</label>
		        <input type="text" name="tel">
		        <label>Tipo de respuesta</label>
		        <input type="radio" value="email" name="radioemail"> Email
		        <label>Tu mensaje</label>
		        <textarea name="mensaje" rows="10"></textarea>
		        <div class="left">Políticas de privacidad <a href="">click acá</a></div>
		        <div class="right"><input type="submit" value="ENVIAR"></div>
		        <div class="clear"></div>
                <?php if(isset($_REQUEST['tipo']) && $_REQUEST['tipo'] !=''){ ?>
						<input type="hidden" name="tipo" value="<?php echo $_REQUEST['tipo']; ?> <?php echo escape($_GET['salon']); ?>" />
				
                <?php } ?>
                
                </form>
	        </div>
	        <div class="clear"></div>
	        </div>
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
