<div class="content">
<!--    <div class="latest-w3">
        <div class="container">
            <h3 class="tittle1">Bibit / Pupuk Terbaru</h3>
            <div class="latest-grids">
                <?php
//                foreach ($baru as $terbaru) {
//                    echo"<div class = \"col-md-4 latest-grid\">
//                    <div class = \"latest-top\">
//                    <img src = \"../gabut/admin/images/bibit_pupuk/$terbaru->foto\" class = \"img-responsive\" alt = \"\">
//                    <div class = \"latest-text\">
//                    <h4>$terbaru->nama</h4>
//                    </div>
//                    <div class = \"latest-text2 hvr-sweep-to-top\">
//                    <h4>Rp. $terbaru->harga</h4>
//                    </div>
//                    </div>
//                    </div>";
//                }
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>-->
    <!--accessories-->
    <div class="accessories-w3l">
        <div class="container">
            <h3 class="tittle">Segera Gadaikan Barang Tak Terpakai Anda dan Dapatkan Bibit/Pupuk Sesuai Keinginan Anda</h3>
            <span>AYO GADAI</span>
            <div class="button">
                <?php echo anchor('c_transaksi/hitung_harga', 'Gadaikan', array('class' => 'button1')) ?>
                <?php echo anchor('c_bibit/get_all_data', 'Bibit & Pupuk', array('class' => 'button1')) ?>
            </div>
        </div>
    </div>
    <!--accessories-->


    <div class="new-arrivals-w3agile">
        <div class="container">
            <h3 class="tittle1">Pupuk Termurah</h3>

            <div class="arrivals-grids">
                <?php
                $i=0;
                foreach ($pupuk as $pupuk) {
                    if ($i==4) {
                        break;
                    }
                    echo "<div class = \"col-md-3 arrival-grid simpleCart_shelfItem\">
                    <div class = \"grid-arr\">
                    <div class = \"grid-arrival\">
                    <figure>
                    ".
                    anchor("c_bibit/index/$pupuk->id","<div class = \"grid-img\">
                    <img src = \"../gabut/admin/images/bibit_pupuk/$pupuk->foto\" class = \"img-responsive\" alt = \"Gambar Pupuk\">
                    </div>")."
                    </figure>
                    </div>
                    <div class = \"women\">
                    <h6>".anchor("c_bibit/index/$pupuk->id","$pupuk->nama")."</h6>
                    <p ><em class = \"item_price\">Harga pasaran : RP. $pupuk->harga, 00</em></p>
                    ".anchor("c_bibit/index/$pupuk->id",'Lihat',array('data-text' =>'Add To Cart', 'class' =>'my-cart-b item_add'))."
                    </div>
                    </div>
                    </div>";
                    $i++;
                }
                
                ?>
                <div class="clearfix"></div>
            </div>
            <h3 class="tittle1">Bibit Termurah</h3>

            <div class="arrivals-grids">
                <?php
                $j=0;
                foreach ($bibit as $bibit) {
                    if ($j==4) {
                        break;
                    }
                    echo "<div class = \"col-md-3 arrival-grid simpleCart_shelfItem\">
                    <div class = \"grid-arr\">
                    <div class = \"grid-arrival\">
                    <figure>".
                    anchor("c_bibit/index/$bibit->id","<div class = \"grid-img\">
                    <img src = \"../gabut/admin/images/bibit_pupuk/$bibit->foto\" class = \"img-responsive\" alt = \"Gambar Pupuk\">
                    </div>")."
                    </figure>
                    </div>
                    <div class = \"women\">
                    <h6>".anchor("c_bibit/index/$bibit->id","$bibit->nama")."</h6>
                    <p ><em class = \"item_price\">Harga pasaran : RP. $bibit->harga, 00</em></p>
                    ".anchor("c_bibit/index/$bibit->id",'Lihat',array('data-text' =>'Add To Cart', 'class' =>'my-cart-b item_add'))."
                    </div>
                    </div>
                    </div>";
                    $i++;
                }
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--new-arrivals-->
</div>
<!--content-->