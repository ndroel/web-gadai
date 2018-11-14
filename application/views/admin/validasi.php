<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <h3>Validasi & Verifikasi Transaksi</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" method="post" action="<?php echo site_url() . "/c_transaksi/validasi_transaksi/$id"; ?>" ENCTYPE="multipart/form-data">
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-label">Foto Barang</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control1" id="foto" name='barang'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="perjanjian" class="col-sm-2 control-label">Surat Perjanjian</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control1" id="perjanjian" name='surat'>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <input type ='submit' name ='validate' class="btn-success btn" value='Validasi'>
                                    <input type ='hidden' name ='username' value='<?php echo $username?>'>
                                    <input type ='hidden' name ='iduser' value='<?php echo $this->uri->segment(4);?>'>
                                    <input type ='submit' name ='cancel' class="btn-default btn" value='Cancel'>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>