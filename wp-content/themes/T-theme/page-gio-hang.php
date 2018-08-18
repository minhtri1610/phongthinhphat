<?php get_header(); ?>
    <?php 
        $total_product = 0;
        $total_all_price = 0;
        $active_btn = false;
        if(isset($_SESSION['data_cart'])){
            $data_cart = [];
            $data_cart = $_SESSION['data_cart'];
            $total_product = count($data_cart);
        }
    ?>
    <div class="container p-camera">
        <div class="row nav-sub">
            <ul>
                <li><a href="<?php echo URL_ROOT;?>">Home</a> &#8811;</li>
                <li><a href="<?php echo URL_ROOT;?>/gio-hang" class = "">Giỏ hàng</a></li>
            </ul>
        </div>
        <div class="linkien_title row" >
            <p class = "">Giỏ hàng (<?php echo $total_product;?> sản phẩm)</p>
        </div>
        <div class="row cart-list">
            <div class="col-md-8 info-cart">
                <div class="row tit-info-cart">
                    <div class="col-md-2 img-cart">
                        
                    </div>
                    <div class="col-md-5">
                        <b>Sản phẩm</b>
                    </div>
                    <div class="col-md-2">
                        <b>Số lượng</b>
                    </div>
                    <div class="col-md-3"><b>Giá </b>( /1 SP)</div>
                    
                </div>

                

                <?php if(!empty($data_cart)){ 
                    $active_btn = true;
                    foreach ($data_cart as $key => $value) {
                        $sll = $value[0]['tmp_sll'];
                        $price = $value[0]['price'];
                        $view_price = formatMoney($price);

                        $total_item_price = $sll*$price;
                        $total_all_price += $total_item_price;
                        $view_price_total = formatMoney($total_all_price);

                        $id_item_pro = $value[0]['id_item'];
                        # code...
                ?>

                    <div class="row tit-info-cart item-gh" id = "<?php echo $id_item_pro;?>">
                        <div class="col-md-2 img-cart">
                            <img src="<?php echo $value[0]['link_thumnail_img']; ?>" alt="<?php echo $value[0]['name_product'];?>">
                        </div>
                        <div class="col-md-5 name-item-cart">
                            <p><a href="<?php echo $value[0]['link_item']?>"><?php echo $value[0]['name_product'];?></a></p>
                            <button onclick = "del_item(<?php echo $id_item_pro;?>)" class = "delete-cart btn" >Xóa</button>
                        </div>
                        <div class="col-md-2 num-sll">
                            <!-- số lượng sản phẩm -->
                            <input onchange = "changed_sll(<?php echo $id_item_pro;?>)" type="number" name="sl" class="sl_item" min = 1 value = <?php echo $sll;?>>
                        </div>
                        <div class="col-md-3 price-item"><?php echo $view_price;?> VNĐ</div>
                        <input class = "price_hidden" type="hidden" name="hidden_price" value = <?php echo $price;?>>
                    </div>

                <?php 
                    }
                ?>
                <div class="row tit-info-cart">
                    <div class="col-md-2 img-cart">
                    </div>
                    <div class="col-md-5">
                        <b class = "sum-price">Tổng tiền </b>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3 total_price" ><?php echo $view_price_total;?> VNĐ</div>
                    <input type="hidden" name="total_price_hidden" value = "<?php echo $total_all_price;?>">
                </div>

                <?php } else{?>
                    <div class="row null-cart">
                        <h5 style = "color: red; font-style : italic">Không có sản phẩm nào trong giỏ hàng</h5>
                    </div>
                <?php }?>
            </div>
            <div class="col-md-4 price-box">
                <h6 class = "title-tt">Thông tin khách hàng</h6>
                <form id = "infor-buyer" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                    <div class="form-group">
                        <label for="name"><b>Họ tên</b> <span style = "color: red">*</span>  </label>
                        <input type="text" required class="form-control" id="name" name = "name_custome">
                    </div>
                    <div class="form-group">
                        <label for="email"><b>Email</b> <span style = "color: red">*</span> </label>
                        <input type="email" required class="form-control" id="email" name = "email">
                    </div>
                    <div class="form-group">
                        <label for="tel"><b>Số điện thoại</b> <span style = "color: red">*</span> </label>
                        <input type="text" required class="form-control" name = "tel" id="tel">
                    </div>
                    <div class="form-group">
                        <label for="add"><b>Địa chỉ nhận hàng</b> <span style = "color: red">*</span></label>
                        <input type="text" required class="form-control" name = "add" id="add">
                    </div>
                    <input type="hidden" name="action" value="contact_form">
                    <input type="submit" <?php if(!$active_btn){ echo 'disabled';}?> class="btn btn-primary edit_btn_checkout" value ="Đặt Hàng">
                </form>
            </div>
        </div>
        
    </div>
<?php get_footer(); ?>