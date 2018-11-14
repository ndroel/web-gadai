<div class="container">
    <div class="grid_3 grid_5">
        <h5>Profil</h5>
        <div class="col-md-6">
            <style>
                h5{
                    font-size: 2.5em;
                    margin-left: 15px;
                    color:#1565C0 !important;
                }
                .table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                    padding: 8px !important;
                }
                table{
                    width: 75% !important;
                    margin-bottom: 0 !important;
                }
                td,tr{
                    color:black !important;
                    font-weight: 500;
                }
                .item{
                    width: 100px;
                }
                .gambar{
                    float:left;
                    width: 25%;
                }
            </style>
            <div class="well" >
                <table class="table">

                    <tbody>
                        <tr>
                            <td class ="item">Usename</td>

                            <td>: <?php echo $data->username ?></td>
                        </tr>
                        <tr>
                            <td class ="item">Nama</td>
                            <td>: <?php echo $data->nama ?></td>
                        </tr>
                        <tr>
                            <td class ="item">E-mail</td>
                            <td>: <?php echo $data->email ?></td>
                        </tr>
                        <tr>
                            <td class ="item">Password</td>
                            <td >: <?php echo $data->pass ?></td>
                        </tr>
                        <tr>
                            <td class ="item">No telp</td>
                            <td>: <?php echo $data->no_telp ?></td>
                        </tr>
                        <tr>
                            <td class ="item">Alamat</td>
                            <td>: <?php echo $data->alamat ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="forg">
                    <?php echo anchor('c_member/edit', 'Edit Profil', array('class' => 'forg-right')) ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
