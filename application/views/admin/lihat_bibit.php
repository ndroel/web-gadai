<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs"> 
            <h3>Lihat Bibit & Pupuk</h3>
            <form class="form-horizontal" style="float:right" method ="post" action ="<?php echo site_url() . "/c_bibit/tambah" ?>">
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-8">
                            <button id="tambah" name="tambah" class="btn btn-success">Tambah</button>
                        </div>
                    </div>

                </fieldset>
            </form>
            <br style="clear: none">
            <div class="panel-body1">
                <div class ="table-responsive">
                    <table class="table">
                        <thead>
                            <?php
                            echo "<tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Harga satuan</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                            <th>Detail</th>
                            <th>#</th>
                            </tr>";
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data as $value) {
                                if ($value->jenis == 1) {
                                    $jenis = "Bibit";
                                } else {
                                    $jenis = "Pupuk";
                                }
                                echo "<tr>
                            <th scope=\"row\">$i</th>
                            <td width = 30px>$value->id</td>
                            <td>$value->nama</td>
                            <td>$jenis</td>
                            <td>$value->harga</td>
                            <td>$value->jumlah</td>
                            <td><img src=\"../admin/images/bibit_pupuk/$value->foto\" width=100px;></td>
                            <td width = 150px>$value->detail</td>
                            <td>
                                <!-- Button (Double) -->
                                <div class=\"form-horizontal1\">
                                    <div class=\"col-md-12\">
                                        <form class=\"edit-member\" method=\"post\" action=\"" . site_url() . "/c_bibit/edit_data\">
                                            <input type=\"hidden\" name=\"id\" value=$value->id></input>
                                            <button title=\"edit data\" id=\"validasi\" name=\"edit\" class=\"btn btn-success\"><span class=\"fa fa-pencil\"></span></button>
                                        </form>
                                        <form class=\"hapus-member\" method=\"post\" onsubmit=\"return validateForm()\" action=\"" . site_url() . "/c_bibit/hapus_data\" name='form'>
                                            <input type=\"hidden\" name=\"id\" value=$value->id\"></input>
                                            <button title=\"hapus data\" id=\"hapus\" name=\"hapus\" class=\"btn btn-danger\"><span class=\"fa fa-trash-o\"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>";
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>