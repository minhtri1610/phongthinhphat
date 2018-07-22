			<!-- footer -->
		<div class="wapper-bottom">
			<div class="container">
				<div class="bottom-area row">
					<div class="col-md-5 info-company">
						<div class="row">
							<img src="<?php echo URL_IMG?>/logo/logo.png" alt="">
						</div>
						<div class="row name-company">
							Công ty <span>&nbsp;Phong Thịnh Phát </span> 
						</div>
						<div class="row">
							Sự hài lòng của khách hàng là trách nhiệm của chúng tôi.
						</div>
					</div>
					<div class="contact col-md-4">
						<div class="row f-contact">Liên hệ với chúng tôi</div>
						<div class="row">
							<p>Add: Nguyễn Văn Quá - Q12 - TP Hồ Chí Minh</p>
						</div>
						<div class="row">
							<p>Phone: 0908784337</p>
						</div>
						<div class="row">
							Email: phongthinhphat@gmail.com
						</div>
					</div>
					<div class="col-md-3">
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
		<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
			(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
			l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
		</script>
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
		
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		

	</body>
</html>
