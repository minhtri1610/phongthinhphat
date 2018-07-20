			<!-- footer -->
		<div class="wapper-bottom">
			<div class="container">
				<div class="bottom-area row">
					<div class="col-md-5 info-company">
						<div class="row">
							<img src="<?php echo URL_IMG?>/logo/logo.png" alt="">
						</div>
						<div class="row name-company">
							Công ty Phong Thịnh Phát 
						</div>
						<div class="row">
							Sự hài lòng của khách hàng là trách nhiệm của chúng tôi.
						</div>
					</div>
					<div class="contact col-md-3">
						<div class="row">Liên hệ với chúng tôi</div>
						<div class="row">
							<p>Địa chỉ:</p>
						</div>
						<div class="row">
							<p>Số điện thoại:</p>
						</div>
						<div class="row">
							Email:
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							FaceBook:
						</div>
						<div class="row">

						</div>
					</div>
				</div>
			</div>
		</div>
		
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
			let width_carousel = window.innerWidth;
			width_carousel = +width_carousel;
			console.log(width_carousel);
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
			jQuery("#gallery_banner").unitegallery({
				gallery_theme: "grid",
				theme_panel_position: "bottom",
				gallery_carousel:true,	
				slider_control_zoom: false,
				slider_enable_text_panel: true,	
				theme_panel_position: "right",
				slider_enable_arrows: true,		
				gridpanel_vertical_scroll: true,
				gallery_width: width_carousel,	
				gallery_autoplay:true,		
				slider_enable_play_button: false
			});
			
		</script>
		<script>
			new WOW().init();
		</script>


	</body>
</html>
