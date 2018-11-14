<?php ?>
<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <h3>Tambah Bibit & pupuk</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" method="post" action="<?php echo site_url() . "/c_transaksi/validasi_transaksi/$id"; ?>" ENCTYPE="multipart/form-data">
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="nama" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="harga" placeholder="Harga">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="jumlah" placeholder="Jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control1" id="foto">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <button class="btn-success btn">Submit</button>
                                    <button class="btn-default btn">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>