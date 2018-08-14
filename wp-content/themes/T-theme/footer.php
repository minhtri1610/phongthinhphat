			<!-- footer -->
		<div class="wapper-bottom">
			<div class="container">
				<div class="bottom-area row">
					<div class="col-md-8 info-company">
						<div class="row">
							<img src="<?php echo URL_IMG?>/logo/logo.png" alt="">
						</div>
						<div class="row name-company">
							Công ty <span style ="color: #0b6b44">&nbsp;Phong </span><span style = "color: #ed3237">&nbsp; Thịnh </span> <span style ="color: #0b6b44">&nbsp; Phát </span> 
						</div>
						<div class="row">
							Sự hài lòng của khách hàng là trách nhiệm của chúng tôi.
						</div>
						<div class="row">
							Add: 36p, Đường số 12, Phường Tân Thới Nhất, Quận 12, TP-HCM
						</div>
						<div class="row">
							Phone: 0908 784 337
						</div>
						<div class="row">
							Email: uyphong92pro@gmail.com
						</div>
					</div>
					<div class="col-md-4">
						<div class="row f-contact">
							Fanpage FaceBook
						</div>
						<div class="row">
							<div id="fb-root">
								<div class="fb-page" data-href="https://www.facebook.com/Phong-Th&#x1ecb;nh-Ph&#xe1;t-200546387283823/" data-small-header="false" data-adapt-container-width="false" data-width="340px" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Phong-Th&#x1ecb;nh-Ph&#xe1;t-200546387283823/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Phong-Th&#x1ecb;nh-Ph&#xe1;t-200546387283823/">Phong Thịnh Phát</a></blockquote></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section>
			<div class="goto-top-page">
				<i class="fas fa-angle-double-up"></i>
			</div>
		</section>
		<footer class="footer" role="contentinfo">

			<!-- copyright -->
			<p class="copyright">
				&copy; <?php echo date('Y'); ?> Copyright <span class="name-company"><?php bloginfo('name'); ?></span>
			</p>
			<!-- /copyright -->

		</footer>
		<!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script src="<?php echo URL_JS;?>/jquery-11.0.min.js"></script>
		<script src="<?php echo URL_JS;?>/bootstrap.min.js"></script>
		<script src="<?php echo URL_JS;?>/unitegallery.min.js"></script>
		<script src="<?php echo URL_JS;?>/ug-theme-grid.js"></script>
		<script src="<?php echo URL_JS;?>/ug-theme-slider.js"></script>
		
		<script src="<?php echo URL_JS;?>/wow.min.js"></script>
		<script src="<?php echo URL_JS;?>/easyzoom.js"></script>
		
		<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
			(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
			l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
		</script>

		<?php if(is_home()):?>
		<!-- gallery index -->
		<script>
			//section machinery
			jQuery("#gallery_cmpany").unitegallery({
				gallery_theme: "grid",
				theme_panel_position: "bottom",
				gallery_carousel:true,	
				slider_control_zoom: false,
				slider_enable_text_panel: true,	
				theme_panel_position: "right",
				slider_enable_arrows: true,		
				gridpanel_vertical_scroll: true,
				gallery_width: 1130,	
				gallery_autoplay:true,		
				slider_enable_play_button: false
			});
			// jQuery("#gallery_banner").unitegallery({
			// 	gallery_theme: "slider",
			// 	gallery_width: 790,	
			// 	gallery_height: 315,
			// 	slider_control_zoom: false,
			// });
		</script>
		<!-- end js gallery index -->
		<?php endif;?>

		<!-- js wowjs and scrolltop -->
		<script>
			new WOW().init();
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
					$('.goto-top-page').fadeIn(200);    // Fade in the arrow
				} else {
					$('.goto-top-page').fadeOut(200);   // Else fade out the arrow
				}
			});
			$('.goto-top-page').click(function() {      // When arrow is clicked
				$('body,html').animate({
					scrollTop : 0                       // Scroll to top of body
				}, 500);
			});
		</script>
		<!-- end js scrolltop -->

		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

	<!-- js for detail page  -->
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>

	<!-- end js for detail page -->

	<?php if(is_page('lien-he')):?>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd5VTbb2knUqtDETsK93fKdPxS04_GSrs"></script>
		<script>
			function initialize(zoom) {
				//get latitude and get longitude
				var geocoder = new google.maps.Geocoder();
				var getAddress = '36p đường số 12, Phường tân thới nhất, Quận 12, Hồ Chí Minh, Việt Nam';
				geocoder.geocode( { 'address': getAddress}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						var latitude = results[0].geometry.location.lat();
						var longitude = results[0].geometry.location.lng();
						var myLatLng = {lat: latitude, lng: longitude};
					// view maps 
						var mapProp = {
							center:new google.maps.LatLng(latitude, longitude),
							zoom:zoom,
							mapTypeId:google.maps.MapTypeId.ROADMAP
						};
						var map=new google.maps.Map(document.getElementById("mapGoogle"),mapProp);
						var marker = new google.maps.Marker ({
							position: myLatLng,
							map: map,
							title: '36p đường số 12, Phường tân thới nhất, Quận 12, Hồ Chí Minh, Việt Nam'
						});
						var infowindow = new google.maps.InfoWindow ({
						content:'<div class="googleMap-title">Công ty Phong Thịnh Phát</div>'
						});
						infowindow.open(map,marker);
						google.maps.event.addListener(marker, 'click', function() {
						infowindow.open(map,marker);
						});
					} 
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize(16));
			
		</script>
	<?php endif;?>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=828266150704740&autoLogAppEvents=1';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	 <script>
		function myFunction() {
			alert(1);
		}
	</script>

	</body>
</html>
