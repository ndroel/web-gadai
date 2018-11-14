
<!--content-->
<div class="content">
    <div class="cart-items">
        <div class="container">
            <h2>Transaksi</h2>

            <div class="panel-body1">
                <div class ="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <?php
                            echo "<tr>
                            <th>No</th>
                            <th>Foto Barang</th>
                            <th>harga barang</th>
                            <th>Foto Bibit</th>
                            <th>jumlah bibit/pupuk</th>
                            <th>status</th>
                            <th>tgl transaksi</th>
                            <th>#</th>
                            </tr>";
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $value) {
                                if ($value->status == 1) {
                                    
                                    $status = "Belum Terverifikasi";
                                    $tombol = " <button title=\"validasi transaksi\" id=\"validasi\" name=\"edit\" class=\"btn btn-success\" disabled>Tebus</button>";
                                    $tombol1 = "<button title=\"hapus transaksi\" id=\"hapus\" name=\"hapus\" class=\"btn btn-danger\">Batal</button>";
                                } else if ($value->status == 2) {
                                    $tombol = " <button title=\"validasi transaksi\" id=\"validasi\" name=\"edit\" class=\"btn btn-success\" >Tebus</button>";
                                    $tombol1 = " <button title=\"hapus transaksi\" id=\"hapus\" name=\"hapus\" class=\"btn btn-danger\">Batal</button>";
                                    $status = "Terverifikasi";
                                } else if ($value->status == 3) {
                                    $status = "Ditebus";
                                    $tombol = " <button title=\"validasi transaksi\" id=\"validasi\" name=\"edit\" class=\"btn btn-success\" disabled>Tebus</button>";
                                    $tombol1 = " <button disabled title=\"hapus transaksi\" id=\"hapus\" name=\"hapus\" class=\"btn btn-danger\">Batal</button>";
                                }
                                $i = 1;
                                echo "<tr>
                            <th scope=\"row\">1</th>
                            <td><img src=\"../admin/images/barang/$value->foto_barang\" width=150px;></td>
                            <td>$value->harga</td>
                            <td><img src=\"../admin/images/bibit_pupuk/$value->foto\" width=150px;></td>
                            <td>$value->satuan</td>
                            <td>$status</td>
                            <td>$value->tgl_transaksi</td>
                            <td>
                                <!-- Button (Double) -->
                                <div class=\"form-horizontal1\">
                                    <div class=\"col-md-12\">
                                        <form class=\"edit-member\" method=\"post\" action=\"" . site_url() . "c_transaksi/proses_tebus/$value->id\">
                                            <input type=\"hidden\" name=\"id\" value=$value->id></input>
                                            $tombol
                                        </form>
                                        <br>
                                        <form class=\"hapus-member\" method=\"post\" onsubmit=\"return validateForm()\" action=\"" . site_url() . "c_transaksi/batal_transaksi\" name='form'>
                                            <input type=\"hidden\" name=\"id\" value=$value->id\"></input>
                                            $tombol1
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>	
        </div>
    </div>
    <!-- checkout -->	
</div>
<!---footer--->