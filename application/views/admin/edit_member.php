<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <h3>Edit Member</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <?php echo form_open('c_member/update_profil_baru','class="form-horizontal"'); ?>
                    <input type="hidden" name ="id" value="<?php echo $data->id; ?>"></input>
                       
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="nama" placeholder="Nama" name ="nama" value="<?php echo $data->nama; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="email" placeholder="Email" name ="email" value="<?php echo $data->email; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_telp" class="col-sm-2 control-label">No Telp</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="no_telp" placeholder="No Telp" name ="no_telp" value="<?php echo $data->no_telp; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-8"><textarea name="alamat" id="alamat" cols="50" rows="10" class="form-control1"><?php echo $data->alamat; ?></textarea></div>
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