			<!-- footer -->
		<div class="wapper-bottom">
			<div class="container">
				<div class="row menu-footer">
					<div class="col-md-4 padlef">
						<ul class = "list-footer">
							<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat"><h5>Camera quan sát</h5></a></li>
							<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-dahua">&#8811; Camera DAHUA</a></li>
							<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-hikvison">&#8811; Camera HIKVISON</a></li>
							<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-paragon">&#8811; Camera PARAGON</a></li>
							<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-kbvison">&#8811; Camera KBVISON</a></li>
							<li><a href="<?php echo URL_ROOT;?>/camera-quan-sat/camera-ip-da-nang">&#8811; Camera IP ĐA NĂNG</a></li>
						</ul>
					</div>
					<div class="col-md-4 padlef">
						<ul class = "list-footer">
							<li><a href="<?php echo URL_ROOT;?>/may-cham-cong"><h5>Máy chấm công</h5></a></li>
							<li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-van-tay">&#8811; Máy chấm công vân tay</a></li>
							<li><a href="<?php echo URL_ROOT;?>/may-cham-cong/may-cham-cong-the-giay">&#8811; Máy chấm công thẻ giấy</a></li>
							
						</ul>
					</div>
					<div class="col-md-4 padlef">
						<?php if(is_home()):?>
							<div class="row f-contact">
								<h5>Fanpage FaceBook</h5>
							</div>
							<div class="row">
								<div id="fb-root">
										<div class="fb-page" 
										data-href="https://www.facebook.com/uyphong6689/"
										data-width="300" 
										data-hide-cover="false"
										data-show-facepile="false"></div>
									
									<!-- <div class="fb-page" data-href="https://www.facebook.com/uyphong6689/" data-width="320" data-small-header="false"  " data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/uyphong6689/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/uyphong6689/">Phong Thịnh Phát</a></blockquote></div> -->
								</div>
								
							</div>
						<?php endif;?>
					</div>
					
				</div>
				<div class="bottom-area">
					<div class="row info-company">
						<img src="<?php echo URL_IMG?>/logo/logo.png" alt="">
					</div>
					<div class="row name-company text-leftt">
						<h3>Công ty PHONG THỊNH PHÁT</h3>
					</div>
					<div class="row text-leftt">
						Sự hài lòng của khách hàng là trách nhiệm của chúng tôi.
					</div>
					<div class="row text-leftt">
						Add: 36p, Đường số 12, Phường Tân Thới Nhất, Quận 12, TP-HCM
					</div>
					<div class="row text-leftt">
						Phone: 0935 088 669 - 0908 784 337
					</div>
					<div class="row text-leftt">
						Email: phongthinhphatvn@gmail.com
					</div>
				</div>
			</div>
		</div>
		<section>
			<div class="goto-top-page">
				<i class="fas fa-angle-up"></i>
			</div>
		</section>

		<section>
			<div class="goto-cart">
				<?php 
					$cnt_cart = 0;
					if(!empty($_SESSION['data_cart'])){
						$cnt_cart = count($_SESSION['data_cart']);
					}
					
				?>
				<a href="<?php echo URL_ROOT;?>/gio-hang"><i class="fas fa-cart-arrow-down"></i><span class="num_cart"><?php echo $cnt_cart;?></span></a>
			</div>
		</section>
		<section>
			<div class="item-call">
				<a href="tel:+840935088669" class="pps-btn-img" title="Liên hệ">
					<i class="fas fa-phone-square"></i>
				</a>
			</div>
		</section>

		<section class= "btn-toggle">
			<button>
				Liên hệ với chúng tôi <i class="fas fa-comments"></i> <i class="fas fa-angle-up"></i>
			</button>
		</section>
		<section id="contact-all">
			<div class="hide_form"><h5>Liên hệ với chúng tôi <i class="fas fa-comments"></i> <i class="fas fa-angle-down"></i></h5></div>
            <?php echo do_shortcode('[contact-form-7 id="147" title="Contact form 1"]');?>
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
<!-- 		
		<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
			(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
			l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
		</script> -->

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
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
					$('.goto-cart').fadeIn(200);    // Fade in the arrow
				} else {
					$('.goto-cart').fadeOut(200);   // Else fade out the arrow
				}
			});
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
					$('.item-call').fadeIn(200);    // Fade in the arrow
				} else {
					$('.item-call').fadeOut(200);   // Else fade out the arrow
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

	<?php if(is_page('lien-he') || is_page('sua-chua-may-tinh-may-in')):?>
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

	<!-- code fanpage facebook -->
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
		
		function resetForm() {
			$('.thumnail-product img').attr('src','');

			$('#name_product').val('');
			$('#name_product').attr('disabled','disabled');

			$('#price').val('');
			$('#price').attr('disabled','disabled');

			$('#quality').val(1);
			$('.link_item').attr('href', '');

			$('#total_price').val('');
			$('#total_price').attr('disabled','disabled');
		}

		function show_info(type, name, price, sale_price, link_img, id_post_camera, link_item) {
			resetForm();
			
			let tmp_price;
			$('.show_modal_order').trigger('click');
			$('.thumnail-product img').attr('src',link_img);
			$('#name_product').val(name);
			if(sale_price != ''){
				$('#price').val(sale_price);
				tmp_price = +sale_price;
			} else{
				$('#price').val(price);
				tmp_price = +price;
			}
			$('.link_item').attr('href', link_item);
			let formart_price  = tmp_price.toLocaleString('de-DE')  + " VNĐ";
			$('#total_price').val(formart_price);
			$('.id_item').val(id_post_camera);
			$('#price_views').val(formart_price);
			
		}

		function charged() {
			let tmp_sll = $('#quality').val();
			let tmp_price = $('#price').val();
			tmp_price = +tmp_price;
			let total_price = tmp_price*tmp_sll;
			let formart_price  = total_price.toLocaleString('de-DE') + " VNĐ";
			$('#total_price').val(formart_price);
		}

		$('.btn_add_cart').click(function () {

			let link_thumnail_img = $('.thumnail-product img').attr('src');
			let name_product = $('#name_product').val();
			let price = $('#price').val();
			let link_item = $('.link_item').attr('href');
			let tmp_sll = $('#quality').val();
			let id_item = $('.id_item').val();
			
			$.ajax({
				type : "post", //Phương thức truyền post hoặc get
				dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
				url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
				data : {
					action: "saveSessionItem", //Tên action
					link_thumnail_img : link_thumnail_img,
					name_product : name_product,
					price : price,
					link_item : link_item,
					tmp_sll : tmp_sll,
					id_item : id_item
				},
				context: this,
				beforeSend: function(){
					//Làm gì đó trước khi gửi dữ liệu vào xử lý
				},
				success: function(response) {
					//Làm gì đó khi dữ liệu đã được xử lý
					if(response.success) {
						$('#modalOder').modal('hide');
						$('.num_cart').html(response.data);
						
						// console.log(response.data);
					}
					else {
						alert('Đã có lỗi xảy ra');
					}
				},
				error: function( jqXHR, textStatus, errorThrown ){
					//Làm gì đó khi có lỗi xảy ra
					console.log( 'The following error occured: ' + textStatus, errorThrown );
				}
			})
			return false;
		})

		function changed_sll(id_changed) {
			let id_sll = '#' + id_changed + " .num-sll input";
			let num_sll = $(id_sll).val();
			if(num_sll >= 1){
				$(id_sll).attr('disabled','disabled');
				$.ajax({
					type : "post", //Phương thức truyền post hoặc get
					dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
					url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
					data : {
						action: "editSessionItem", //Tên action
						id_edit : id_changed,
						num_sll : num_sll
					},
					context: this,
					beforeSend: function(){
						//Làm gì đó trước khi gửi dữ liệu vào xử lý
					},
					success: function(response) {
						$(id_sll).removeAttr('disabled');
						//Làm gì đó khi dữ liệu đã được xử lý
						if(response.success) {
							$(this).removeAttr('disabled');
							let tmp_total = 0;
							$( ".item-gh" ).each(function( index ) {
								let tmp_price = $( this ).find( ".price_hidden" ).val();
								let tmp_num = $( this ).find( ".sl_item" ).val();
								tmp_price =  +tmp_price;
								tmp_num = +tmp_num;
								let tmp_tinh = tmp_price*tmp_num;
								tmp_total +=  tmp_tinh;
							});
							$('.total_price_hidden').val(tmp_total);
							tmp_total = +tmp_total;
							let formart_price  = tmp_total.toLocaleString('de-DE') + "VNĐ";
							$('.total_price').html(formart_price);
							
						}
						else {
							$(this).removeAttr('disabled');
							alert('Đã có lỗi xảy ra');
						}
					},
					error: function( jqXHR, textStatus, errorThrown ){
						//Làm gì đó khi có lỗi xảy ra
						console.log( 'The following error occured: ' + textStatus, errorThrown );
					}
				})
			} else {
				$(id_sll).val(1);
			}
			
			return false;
		}

		function del_item(id) {
			console.log(id);
			if (confirm("Bạn có muốn xóa sản phẩm này không?")) {
				$.ajax({
					type : "post", //Phương thức truyền post hoặc get
					dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
					url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
					data : {
						action: "delItemSessionItem", //Tên action
						id_del : id,
					},
					context: this,
					beforeSend: function(){
						//Làm gì đó trước khi gửi dữ liệu vào xử lý
					},
					success: function(response) {
						//Làm gì đó khi dữ liệu đã được xử lý
						if(response.success) {
							//reload
							location.reload();
						}
						else {
							$(this).removeAttr('disabled');
							alert('Đã có lỗi xảy ra');
						}
					},
					error: function( jqXHR, textStatus, errorThrown ){
						//Làm gì đó khi có lỗi xảy ra
						console.log( 'The following error occured: ' + textStatus, errorThrown );
					}
				})
			}
			
			return false;
		}
		
		
		$( ".btn-toggle" ).click(function() {
			$( "#contact-all" ).toggle( "fast" );
			$('.btn-toggle').hide();
		});
		$( ".hide_form" ).click(function() {
			$( "#contact-all" ).toggle( "fast" );
			$('.btn-toggle').show();
		});
	</script>

	</body>
</html>
