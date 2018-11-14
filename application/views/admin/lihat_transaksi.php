<script>
    function doconfirm()
    {
        job = confirm("Are you sure to delete permanently?");
        if (job != true)
        {
            return false;
        }
    }
</script>
<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs"> 
            <h3>Lihat Transaksi</h3>
            <div class="panel-body1">
                <div class ="table-responsive">
                    <table class="table">
                        <thead>
                            <?php
                            echo "<tr>
                            <th>No</th>
                            <th>Nama Member</th>
                            <th>Foto Barang</th>
                            <th>Perjanjian</th>
                            <th>Foto Barang Member</th>
                            <th>Kode Bibit/pupuk</th>
                            <th>harga barang</th>
                            <th>jumlah bibit/pupuk</th>
                            <th>status</th>
                            <th>tgl transaksi</th>
                            <th>tgl tebus</th>
                            <th>#</th>
                            </tr>";
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data as $value) {
                                if ($value->status == 1) {
                                    $tombol = "<button title=\"validasi transaksi\" id=\"validasi\" name=\"edit\" class=\"btn btn-success\"><span class=\"fa fa-check\"></span></button>";
                                    $status = "Belum Terverifikasi";
                                } else if ($value->status == 2) {
                                    $status = "Terverifikasi";
                                    $tombol = "<button disabled title=\"validasi transaksi\" id=\"validasi\" name=\"edit\" class=\"btn btn-success\"><span class=\"fa fa-check\"></span></button>";
                                } else {
                                    $tombol = "<button disabled title=\"validasi transaksi\" id=\"validasi\" name=\"edit\" class=\"btn btn-success\"><span class=\"fa fa-check\"></span></button>";
                                    $status = "Ditebus";
                                }
                                echo "<tr>
                            <th scope=\"row\">$i</th>
                            <td>$value->nama</td>
                            <td><img src=\"../admin/images/barang/$value->foto_barang\" width=50px;></td>
                            <td><img src=\"../admin/images/validasi/$value->perjanjian\" width=50px;></td>
                            <td><img src=\"../admin/images/validasi/$value->foto_barang_user\" width=50px;></td>
                            <td>$value->id_bibit</td>
                            <td>$value->harga</td>
                            <td>$value->satuan</td>
                            <td>$status</td>
                            <td>$value->tgl_transaksi</td>
                            <td>$value->tgl_tebus</td>
                            <td>
                                <!-- Button (Double) -->
                                <div class=\"form-horizontal1\">
                                    <div class=\"col-md-12\">
                                        <form class=\"edit-member\" method=\"post\" action=\"" . site_url() . "/c_transaksi/validasi_transaksi/$value->id/$value->iduser\">
                                            <input type=\"hidden\" name=\"id\" value=$value->id></input>
                                            <input type=\"hidden\" name=\"username\" value=$value->username></input>
                                            $tombol
                                        </form>
                                        <form class=\"hapus-member\" method=\"post\" onsubmit=\"return validateForm()\" action=\"" . site_url() . "/c_transaksi/batal_transaksi\" name='form'>
                                            <input type=\"hidden\" name=\"id\" value=$value->id\"></input>
                                            <button title=\"hapus transaksi\" id=\"hapus\" name=\"hapus\" class=\"btn btn-danger\"><span class=\"fa fa-trash-o\"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>";$i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>