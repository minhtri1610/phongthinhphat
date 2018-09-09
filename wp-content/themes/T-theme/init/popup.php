<!-- modal cart -->
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary show_modal_order" style="display: none;" data-toggle="modal" data-target="#modalOder">
    Open modal
</button>

<!-- The Modal -->
<div class="modal fade" id="modalOder">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Thêm vào giỏ hàng</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4 box-left-cart">
                    <div class="form-group thumnail-product">
                        <img src="" alt="">
                    </div>
                    <input type="hidden" name="id_item" class ="id_item">
                    <input type="button" data-dismiss="modal" value = "Chọn Mua" class="btn btn-primary btn_add_cart">
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="name_product"><a class="link_item" href = ""><b>Tên sản phẩm</b></a></label>
                        <input type="text" readonly class="form-control" id="name_product">
                    </div>
                    <div class="form-group">
                        <label for="price"><b>Giá</b></label>
                        <input type="text" readonly class="form-control" id="price_views">
                        <input type="hidden" readonly class="form-control" id="price">
                    </div>
                    <div class="form-group">
                        <label for="price"><b>Số lượng</b></label>
                        <input type="number" onchange = "charged()" class="form-control" id="quality" min = 1 max = 1000>
                    </div>
                    <div class="form-group">
                        <label for="price"><b>Thành tiền</b></label>
                        <input type="text" readonly class="form-control" id="total_price">
                    </div>
                </div>
            </div>
            
            

            
        </div>
        
    </div>
    </div>
</div>