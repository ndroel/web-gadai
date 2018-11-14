<div class="single-wl3">
    <div class="container">
        <div class="single-grids">
            <div class="col-md-9 single-grid">
                <div clas="single-top">
                    <div class="single-left">
                        <div class="flexslider">
                            <ul class="slides">
                                <li >
                                    <div class="thumb-image"> <img src="<?php echo base_url()."admin/images/bibit_pupuk/".$data->foto?>" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-right simpleCart_shelfItem">
                        <h4><?php echo $data->nama?></h4>
                        <p class="price item_price">Rp. <?php echo $data->harga?>/kg</p>
                        <div class="description">
                            <p><span>Quick Overview : </span><?php echo $data->detail?></p>
                        </div>
                        <div class="color-quality">
                            <h6>Tersedia : <?php echo $data->jumlah?></h6>

                        </div>
                        <div class="women">
                             <?php echo anchor("c_transaksi/hitung_harga/$data->id",'Gadaikan',array('class' => 'my-cart-b item_add','data-text'=>'Add To Cart')) ?>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>