		<footer>
            <div class="container">
                <div class="row footer-widgets">
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-widget social-widget">
                            <h4>Síguenos<span class="head-line"></span></h4>
                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                </li>
                                <li style="margin: 0 10px;">
                                    <a class="instgram" href="#"><i class="fa fa-instagram fa-lg"></i></a>
                                </li>
                                <li>
                                    <a class="google" href="#"><i class="fa fa-youtube-square fa-lg"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <address>
                                <p>Av. Dos de Mayo 516 of. 201 - Miraflores</p>
                                <p>Av. Manuel Olgín 335 of. 1205 - Surco</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <ul class="footer-widget">
                            <li><span><i class="fa fa-phone fa-lg"></i> Central:</span> 708 4101</li>
                            <li><span><i class="fa fa-mobile-phone fa-lg"></i> RPC:</span> 992346162</li>
                            <li><span><i class="fa fa-envelope-o"></i> Correo:</span> eventos@nosilenceperu.com</li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <h4><img src="images/nosilence.png" class="img-responsive pull-right" alt="Footer Logo" /></h4>
                    </div>
                </div>
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <?php echo date('Y') ?> Nosilence Perú - Todos los derechos reservados</p>
                        </div><!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    <!-- Margo JS  -->
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="js/jquery.fitvids.js"></script>-->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!--<script type="text/javascript" src="js/nivo-lightbox.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.isotope.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.appear.js"></script>-->
    <!--<script type="text/javascript" src="js/count-to.js"></script>-->
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <!--<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <!--<script type="text/javascript" src="js/mediaelement-and-player.js"></script>-->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script>
    	var $submit = $('#submit');
    	if ($submit.length) {
			(function ( $ ) {
				$.fn.CustomMap = function( options ) {
					
					var posLatitude = $('#map').data('position-latitude'),
					posLongitude = $('#map').data('position-longitude');
					
					var settings = $.extend({
						home: { latitude: posLatitude, longitude: posLongitude },
						text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
						icon_url: $('#map').data('marker-img'),	
						zoom: 16
					}, options );
					
					var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);
					
					return this.each(function() {
						var element = $(this);
						
						var options = {
							zoom: settings.zoom,
							center: coords,
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							mapTypeControl: false,
							scaleControl: false,
							streetViewControl: false,
							panControl: true,
							disableDefaultUI: true,
							zoomControlOptions: {
								style: google.maps.ZoomControlStyle.DEFAULT
							},
							overviewMapControl: true,
						};
						
						var map = new google.maps.Map(element[0], options);
						
						var icon = { 
							url: settings.icon_url, 
							origin: new google.maps.Point(0, 0)
						};
						
						var marker = new google.maps.Marker({
							position: coords,
							map: map,
							icon: icon,
							draggable: false
						});
						
						var info = new google.maps.InfoWindow({
							content: settings.text
						});
						
						google.maps.event.addListener(marker, 'click', function() { 
							info.open(map, marker);
						});
						
						var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];
						
						map.setOptions({styles: styles});
					});
				};
			}( jQuery ));

			jQuery(document).ready(function() {
				jQuery('#map').CustomMap();
			});

			$submit.click(function(e){
				e.preventDefault();
				var $messages = $('#content-messages'),
					$form = $(".contact-form"),
					data = $form.serialize(),
					$inputs = $form.find(':input');

				$inputs.prop('disabled', true);
				$messages.children().addClass('hidden');
				$.ajax({
					url: "php/send.php",
					data: data,
					type: 'POST',
					dataType: 'json'
				}).done(function(response) {
					if (response.load) {
						$('#success').removeClass('hidden').html(response.success_message);
						$form.trigger('reset');
					} else {
						$('#error').removeClass('hidden').html(response.error_message);
					}
				}).always(function() {
					$inputs.prop('disabled', false);
				});
			});
    	}
	</script>

    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>
</html>