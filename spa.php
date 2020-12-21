<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="spa">
	       <!--<img src="img/_Spa/KER_Spa_Banner.jpg" alt="KER_Spa_Banner" class="img-responsive" />-->
	       <img src="img/KER_SAN_TELMO_WebSite_Spa_Armonia_Banner.jpg" alt="09_KER_Spa_img01" class="img-responsive" />
	       <div class="lista">
	       <img src="https://kerrecoleta.com.ar/KER_BELGRANO_Website/2/KER_BELGRANO_SPA_foto01.jpg" alt="09_KER_Spa_img01" class="img-responsive hidden-xs" />
	       <img src="https://kerrecoleta.com.ar/KER_BELGRANO_Website/2/KER_BELGRANO_SPA_ListadePrecios_VERSION_MOBILE_ copia.jpg" alt="KER_BELGRANO_SPA_banner01" class="img-responsive hidden-sm hidden-lg"/>
	       <div class="texto">
		       <h1>LISTA DE PRECIOS</h1>
		       <h2>LIST PRICE</h2>
		       <a href="contacto.php?tipo=spa#contacto">RESERV&Aacute;</a>
		       <a href="KER_ARMONIA_SPA_ListadePrecios_DAY_SPA.pdf" target="_blank">VER LISTA</a>
	       </div>
	       </div>
	       <img src="img/_Spa/09_KER_Spa_img01.jpg" alt="09_KER_Spa_img01" class="img-responsive" />
	       <img src="img/_Spa/09_KER_Spa_img02.jpg" alt="09_KER_Spa_img01" class="img-responsive" />
	       <img src="img/_Spa/09_KER_Spa_img03.jpg" alt="09_KER_Spa_img01" class="img-responsive" />
	       
	       <div class="pad">
	       <h1>Balance your energy</h1>
	       <p style="font-size:14px; text-align:center; padding-bottom:15px;">El Hotel cuenta con un Health Club, Fitness & Spa totalmente equipado, donde Usted <br>podrá hacer ejercicio, distenderse en la piscina, o disfrutar de un masaje o un tratamiento facial.
	       </p>
	       <!--<a href="KER_HISTORIC_SPA_ListadePrecios_.pdf" target="_blank">VER OPCIONES</a><br>-->
	       <a href="contacto.php?tipo=spa#contacto">CONSULTA</a>
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
