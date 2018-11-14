<!--content-->

<div class="content">
    <div class="cart-items">
        <div class="container">
            <div class="form-w3agile">
                <h3>Daftar Bibit & Pupuk</h3>
                <div class="panel-body1">
                    <div class ="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <?php
                                echo "<tr>
                            <th>No</th>
                            <th>Nama Bibit/Pupuk</th>
                            <th>Jenis</th>
                            <th>Harga</th>
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
                            <td>".anchor("c_bibit/index/$value->id","$value->nama")."</td>
                            <td>$jenis</td>
                            <td>$value->harga</td>
                            
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
    <!-- checkout -->	
</div>
<!---footer--->