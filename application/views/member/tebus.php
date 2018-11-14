<!--content-->
<div class="content">
    <!--login-->
    <div class="login">

        <h3 style ="color: #1565C0;
    font-size: 2.5em;
    text-align: center;
    margin-bottom: 1.5em;">Tebus Barang </h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" method="post" action ="<?php echo base_url() . "c_transaksi/proses_tebus" ?>" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $this->uri->segment(3)?>" name ="id">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Foto Bibit / Pupuk</span>
                        <input type="file" class="form-control" aria-describedby="basic-addon2" name="bibit">

                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">Tanggal ingin menebus</span>
                        <input type='date' name="tgl_tebus"class="form-control" required/>
                    </div>

                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datepicker( "option", "dateFormat", 'yy-mm-dd' );
                        });
                    </script>

                    <div class="input-group">
                        <div class="col-sm-3" style="padding: 0;float: right;width: 18%;">
                            <input type ="submit" name ="tebus" class="btn-success btn" value="Tebus">
                            <input type ="submit" name ="cancel" class="btn-default btn" value="Cancel">
                        </div>
                    </div>
            </div>
        </div>

    </div>
    <!--login-->
</div>
<!--content-->