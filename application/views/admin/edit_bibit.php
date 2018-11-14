
<div id="page-wrapper">
    <div class="graphs">
        <div class="xs">
            <h3>Edit Bibit / Pupuk</h3>
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" action ="<?php echo site_url()."/c_bibit/edit_data";?>" method ="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value ="<?php echo $data->id?>">
                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="nama" placeholder="Nama" name ="nama" value="<?php echo $data->nama?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="harga" placeholder="Harga" name ="harga" value="<?php echo $data->harga?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" id="jumlah" placeholder="Jumlah" name ="jumlah" value="<?php echo $data->jumlah?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                            <div class="col-sm-8">
                               <select name="jenis" class ="form-control1" id="jenis">
                                    <option value="1">Bibit</option>
                                    <option value="2">Pupuk</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="detail" class="col-sm-2 control-label">Detail</label>
                            <div class="col-sm-8">
                                <textarea class="form-control1" id="detail" placeholder="" name ="detail"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 control-label">Foto</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control1" id="foto" name ="foto">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <input type ='submit' name ="submit" class="btn-success btn" value ="Submit">
                                    <input type ='submit' name ="cancel" class="btn-default btn" valus="cancel">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>