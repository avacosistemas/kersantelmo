<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
       <div class="halo">
	       <img src="img/_halo/KER_Halo_banner.jpg" alt="KER_Halo_banner" class="img-responsive" />
	       <h1>Taste everything</h1>
	       <p style="color:#fff; text-align:center; background-color:#000; padding-bottom:45px; font-size:16px;">Desayuno Buffet Americano, almuerzos, cenas, cocktails & bar, meriendas, té, brunchs.</p>
	       <div class="item">
		       <img src="img/_halo/KER_Halo_img_01.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="botones">
			       <a href="contacto.php?tipo=Halo reserva#contacto">RESERVA</a>
                   <?php $menu =  consulta($kerhistoric,"menu","menues",1); 
                   if($menu!=''){ ?>
			       <a href="img_menues/<?php echo $menu; ?>" target="_blank">VER MEN&Uacute;</a>
                   <?php } ?>
		       </div>
	       </div>
	       
	       <div class="item">
		       <img src="img/_halo/KER_Halo_img_02.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="titulo">MEN&Uacute; EJECUTIVO</div>
		       <div class="botones">
			       <a href="contacto.php?tipo=Halo reserva#contacto">RESERVA</a>
			                          <?php $menu =  consulta($kerhistoric,"menu_ejecutivo","menues",1); 
                   if($menu!=''){ ?>
			       <a href="img_menues/<?php echo $menu; ?>" target="_blank">VER MEN&Uacute;</a>
                   <?php } ?>
		       </div>
	       </div>
	       
	       <div class="item">
		       <img src="img/_halo/KER_Halo_img_03.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="titulo">HALO BAR</div>
		       <div class="botones">
			       <a href="contacto.php?tipo=Halo reserva#contacto">RESERVA</a>
			                          <?php $menu =  consulta($kerhistoric,"menu_halo_bar","menues",1); 
                   if($menu!=''){ ?>
			       <a href="img_menues/<?php echo $menu; ?>" target="_blank">VER MEN&Uacute;</a>
                   <?php } ?>
		       </div>
	       </div>
	       
	       <div class="item">
		       <img src="img/_halo/KER_Halo_img_04.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="titulo">TRAGOS</div>
		       <div class="botones">
			                          <?php $menu =  consulta($kerhistoric,"menu_tragos","menues",1); 
                   if($menu!=''){ ?>
			       <a href="img_menues/<?php echo $menu; ?>" target="_blank">VER MEN&Uacute;</a>
                   <?php } ?>
		       </div>
	       </div>
	       
	       <div class="item">
		       <img src="img/_halo/KER_Halo_img_05.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="titulo">CAFETER&Iacute;A</div>
		       <div class="botones">
			                          <?php $menu =  consulta($kerhistoric,"menu_cafeteria","menues",1); 
                   if($menu!=''){ ?>
			       <a href="img_menues/<?php echo $menu; ?>" target="_blank">VER MEN&Uacute;</a>
                   <?php } ?>
		       </div>
	       </div>
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
