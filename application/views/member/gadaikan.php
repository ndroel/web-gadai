
<!--content-->
<div class="content">
    <!--login-->
    <div class="login">
        <div class="form_gadai">
            <h3 >Gadaikan    </h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" method ="post" action="<?php echo base_url() . "c_transaksi/hitung_harga" ?>" ENCTYPE="multipart/form-data">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Nama Barang</span>
                            <input onfocus="this.value = ''" type="text" name ="nama" class="form-control" placeholder="Masukkan nama barang" aria-describedby="basic-addon2" value="<?php echo $nama; ?>">

                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Foto Barang</span>
                            <input type="file" name ="foto" class="form-control" placeholder="Masukkan Foto Barang" aria-describedby="basic-addon2">

                        </div>

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Harga</span>
                            <input onfocus="this.value = ''" type="text" name ="harga" class="form-control" placeholder="Masukkan harga barang" aria-describedby="basic-addon2" value="<?php echo $harga; ?>">

                        </div>
                        <?php
                        echo"
                            <div class=\"input-group\">
                            <span class=\"input-group-addon\" id=\"basic-addon2\">Bibit/pupuk</span>
                            <select name=\"jenis\" class =\"form-control\" id=\"jenis\">";
                        if (count($data_bibit) != 1) {
                            foreach ($data_bibit as $value) {
                                if ($value->id != 1) {
                                    if ($value->id == $data_terpilih->id) {
                                        echo"<option selected value = \"$value->id\">$value->nama</option>";
                                        continue;
                                    }
                                    echo"<option value = \"$value->id\">$value->nama</option>";
                                }
                            }
                        } else if ($terpilih == null) {
                            echo"<option value = \"$data_bibit->id\">$data_bibit->nama</option>";
                        }

                        echo"</select>
                        </div>";

                        //echo ""
                        ?>

                        <div class="input-group ">
                            <div class="col-sm-3 tombol" style="padding: 0;float: right;width: 18%;">
                                <input type="submit" class="btn-success btn" name ="hitung" value ="Hitung">
                                <input type="submit" class="btn-default btn" name ="cancel" value="Cancel">
                            </div>
                        </div>

                    </form>
                    <br>
                    <br>
                    <form class="form-horizontal " method="post" action="<?php echo base_url() . "c_transaksi/proses_gadai" ?>">
                        <input type="hidden" name="idbibit" value ="<?php
                        if ($data_terpilih->id == null) {
                            echo "";
                        } else {
                            echo $data_terpilih->id;
                        }
                        ?>">
                        <input type="hidden" name="hargabarang" value ="<?php
                        if ($harga == 0) {
                            echo "";
                        } else {
                            echo $harga;
                        }
                        ?>">
                        <input type="hidden" name="namabarang" value ="<?php
                        if ($nama == "") {
                            echo "";
                        } else {
                            echo $nama;
                        }
                        ?>">
                        <input type="hidden" name="fotobarang" value ="<?php
                        if ($fotobarang == "") {
                            echo "";
                        } else {
                            echo $fotobarang;
                        }
                        ?>">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Jumlah yang bisa diambil</span>
                            <input name="diambil" type="text" class="form-control" readonly aria-describedby="basic-addon2" value="<?php echo $jml; ?>">
                        </div>
                        <div class="input-group">
                            <div class="col-sm-1" style="float: right;width:12%">
                                <input type="submit" name ="gadai" class="btn-success btn" value="Gadaikan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--login-->
</div>
<!--content-->