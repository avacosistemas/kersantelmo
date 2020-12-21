<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="salones">
	       <img src="img/05_EVENTOS/KER_WebHoteles_EVENTOS_Banner.jpg" alt="_KER_Salones_Banner" class="img-responsive" />
	       <div class="col-md-6">
		       <img src="img/05_EVENTOS/KER_WebHoteles_EVENTOS_01.jpg" alt="KER_Salones_img_01" class="img-responsive" />
	       </div>
	       <div class="col-md-6">
		       <h1>MEETINGS AND MORE</h1>
		       <p>En Ker Hoteles contamos con salones que se adaptan
 a lo que requiera tu evento.<br>
Conocé las diferentes capacidades y disposiciones
 que tenemos para ofrecerte.</p>
<a href="contacto.php?tipo=Salones Cotizacion#contacto">COTIZ&Aacute; TU EVENTO</a>
	       </div>
	       <div class="clear"></div>
	       <div class="fotos">
		       <img src="img/05_EVENTOS/KER_WebHoteles_EVENTOS_02.jpg" alt="KER_WebHoteles_EVENTOS_02" class="img-responsive" />
		       <img src="img/05_EVENTOS/KER_WebHoteles_EVENTOS_03.jpg" alt="KER_WebHoteles_EVENTOS_02" class="img-responsive" />
		       <img src="img/05_EVENTOS/KER_WebHoteles_EVENTOS_04.jpg" alt="KER_WebHoteles_EVENTOS_02" class="img-responsive" />
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
