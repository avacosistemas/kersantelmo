<footer>
	        <div class="col-md-3 col1">
		        <p>VUELTA DE OBLIGADO 2727, <br>BUENOS AIRES, ( C1428ADS )<br> ARGENTINA.</p>
		        <a href="tel:0810-3456-537">0810-3456-537</a>
		        <a href="tel:5277-4600">5277-4600</a>
		        <a href="mailto:reservasbelgrano@kerhoteles.com.ar">reservasbelgrano@kerhoteles.com.ar</a>
		        <a href="http://qr.afip.gob.ar/?qr=NDLJYmBeEZlXcakOrXDHzQ,," target="_F960AFIPInfo"><img src="https://www.afip.gob.ar/images/f960/DATAWEB.jpg" border="0" width="31" style="margin:10px 0 10px 0;"></a>
	        </div>
	        <div class="col-md-3 col2">
		        <ul>
			        <li><a href="promociones.php">PROMOCIONES</a></li>
			        <li><a href="experiencias.php">EXPERIENCIAS</a></li>
			        <li><a href="#">UBICACI&Oacute;N</a></li>
			        <li><a href="https://reservations.travelclick.com/74787#/guestsandrooms" target="_blank">RESERVAS</a></li>
			        <li><a href="contacto.php">CONTACTO</a></li>
		        </ul>
	        </div>
	        <div class="col-md-3 col3">
		        <ul>
			        <li><a href="habitaciones.php">HABITACIONES</a></li>
			        <li><a href="salones.php">EVENTOS</a></li>
			        <li><a href="spa.php">SPA</a></li>
		        </ul>
	        </div>
	        <div class="col-md-3 col4"><img src="KER_BELGRANO_Website/LOGOS/Home_Ker_Belgrano_logo.png"></div>
	        <div class="clear"></div>
        </footer>
        
        <div class="copy">
	        <a href="http://kaser.com.ar" target="_blank"><img src="img/Ker_Historic_SanTelmo_BsAs_Desarrolado-Kaser.svg" width="200"></a>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
		<script src="js/jquery.nice-select.js"></script>
    
		<script type="text/javascript" src="https://grandview.com.ar/js/lib/jquery-ui.min.js"></script>
		<script src="js/wow/dist/wow.min.js"></script>
		<link rel="stylesheet" href="js/animate.css">
<script>
 new WOW().init();
</script>
    
    <script>
	$(".volumen").click( function (){
    if( $("video").prop('muted') ) {
          $("video").prop('muted', false);
          $(".vol2").show();
          $(".vol1").hide();
          //$(".vol2").element.style.display = 'block';
    } else {
      $("video").prop('muted', true);
      $(".vol1").show();
      $(".vol2").hide();
      //$(".vol1").style.display = 'none';
          //$(".vol2").style.display = 'block';
    }
  });
</script>
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
	$(function() {
  $('#fecha1, #fecha2').daterangepicker({
    opens: 'right'
  }, function(start, end, label) {

	  $('#fecha1').html(start.format('DD'));
	  $('#fecha2').html(end.format('DD'));
	  $('#desde2').val(start.format('MM/DD/YYYY'));
	  $('#hasta2').val(end.format('MM/DD/YYYY'));
      //console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
    </body>
</html>