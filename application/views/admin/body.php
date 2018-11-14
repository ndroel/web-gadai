<div id="page-wrapper">
    <div class="graphs">
        <div class="span_11">
            <div class="col-md-6 col_4">
                <div class="graph_box">			
                    <div class="col-md-4 grid_2" style="width: 100%"><div class="grid_1">
                            <h3>Harga Bibit & Pupuk</h3>
                            <canvas id="bibit" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        </div></div>
                </div>
                <script>
                    var lineChartData = {
                        labels: ["", "", "", "", "", "", ""],
                        datasets: [
                            {
                                fillColor: "#00aced",
                                strokeColor: "#00aced",
                                pointColor: "#00aced",
                                pointStrokeColor: "#fff",
                                data: [<?php foreach ($harga as $data){echo $data->harga.",";}?>]
                            }
                        ]

                    };

                    new Chart(document.getElementById("bibit").getContext("2d")).Line(lineChartData);
                </script>
            </div>
            <div class="col-md-6 col_5">
                <div class="col-md-6 widget widget1">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                        <div class="stats">
                            <h5><strong><?php echo count($transaksi);?></strong></h5>
                            <span>Transaksi</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 widget widget1">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-users user1 icon-rounded"></i>
                        <div class="stats">
                            <h5><strong><?php echo count($member);?></strong></h5>
                            <span>Member</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 widget widget1">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-leaf user2 icon-rounded"></i>
                        <div class="stats">
                            <h5><strong><?php echo count($bibit);?></strong></h5>
                            <span>Bibit</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 widget">
                    <div class="r3_counter_box">
                        <i class="pull-left fa fa-medkit dollar1 icon-rounded"></i>
                        <div class="stats">
                            <h5><strong><?php echo count($pupuk);?></strong></h5>
                            <span>Pupuk</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>