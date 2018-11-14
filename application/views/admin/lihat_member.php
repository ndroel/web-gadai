
<div id="page-wrapper">
    <div class="col-md-12 graphs">
        <div class="xs"> 
            <h3>Lihat Member</h3>
            <div class="panel-body1">
                <div class ="table-responsive">
                    <table class="table">
                        <thead>
                            <?php
                            echo "<tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>No telp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>#</th>
                            </tr>";
                            ?>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data as $value) {
                                echo "<tr>
                                    <th scope=\"row\">$i</th>
                                    <td>$value->nama</td>
                                    <td>$value->username</td>
                                    <td>$value->no_telp</td>
                                    <td>$value->email</td>
                                    <td>$value->alamat</td>
                                    <td>
                                        <!-- Button (Double) -->
                                        <div class=\"form-horizontal1\">
                                                    <div class=\"col-md-12\">
                                                        <form class=\"edit-member\" method=\"post\" action=\"" . site_url() . "/c_member/edit\">
                                                        <input type=\"hidden\" name=\"id\" value=$value->id></input>
                                                        <button id=\"validasi\" name=\"edit\" class=\"btn btn-success\"><span class=\"fa fa-pencil\"></span></button>
                                                        </form>
                                                        <form class=\"hapus-member\" method=\"post\" action=\"" . site_url() . "/c_member/hapus_member\">
                                                        <input type=\"hidden\" name=\"id\" value=$value->id></input>
                                                        <button id=\"hapus\" name=\"hapus\" class=\"btn btn-danger\"><span class=\"fa fa-trash-o\"></span></button>
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
