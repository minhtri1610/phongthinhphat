<?php get_header(); ?>
    
    <div class="container page-contact">
        <div class="title-contact">
            <div class="linkien_title row" >
                <p class = " " >Liên hệ</p>
            </div>
        </div>
        <div class="content-contact">
            <div class="row">
                <div class="col-md-6 contact-form">
                    <div class="row msg-contact"><p>Vui lòng điền vào Form liên hệ và nhấn gửi.</p></div>
                    <?php echo do_shortcode('[contact-form-7 id="147" title="Contact form 1"]');?>
                </div>

                <div class="col-md-6">
                    <div class="cpn-name">
                        <h4>Công ty <span class = "text-cpn"> Phong Thịnh Phát <span></h4>
                    </div>
                    <div class="box-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.598192154593!2d106.62838181392061!3d10.842029892276985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175298c2bbd03f1%3A0x4e0b17433b3c8da!2zxJDGsOG7nW5nIE5ndXnhu4VuIFbEg24gUXXDoSwgUXXhuq1uIDEyLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1532858692835" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div id="map_canvas"></div>
                </div>
            </div>
        </div>
        
    </div>

<?php get_footer(); ?>