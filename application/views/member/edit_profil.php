<?php ?>
<div class="content">
    <div class="container">
        <div class="form-w3agile" style="padding-top: 30px">
            <h3>Edit Profil</h3>
            <div class="tab-content" style="width: 70%;margin-left: 20%;">
                <div class="tab-pane active" id="horizontal-form">

                    <form class="form-horizontal" method='post' action ="<?php echo base_url() . "c_member/update_profil_baru" ?>" >
                        <input type="hidden" name ="id" value="<?php echo $this->session->userdata('id'); ?>">
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name ="nama" class="form-control" id="nama" placeholder="Nama" value="<?php echo $data->nama; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" name ="email" class="form-control" id="email" placeholder="Email" value="<?php echo $data->email; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="col-sm-2 control-label">No Telp</label>
                            <div class="col-sm-8">
                                <input type="text" name ="no_telp" class="form-control" id="no_telp" placeholder="No Telp" value="<?php echo $data->no_telp; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-8"><textarea name="alamat" id="alamat" cols="50" rows="10" class="form-control"><?php echo $data->alamat; ?></textarea></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <input type='submit' class="btn-success btn" name='simpan' value='Submit'>
                                    <input type='submit' class="btn-default btn" name='batal' value ='Cancel'>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>