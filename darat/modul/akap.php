<div style="z-index:1" class="col-md-12">
  <div style="
  border-top: 3px solid #025f9b;
  border-left: 1px solid #ededed;
  border-right: 1px solid #ededed;
  padding-bottom:10px;
  border-top-left-radius:5px;
  border-top-right-radius:5px;
  background-color: white;">
  </div>
  <div style="
  padding-left:10px; 
  padding-right:10px;
  padding-bottom:10px;
  border-left: 1px solid #ededed;
  border-right: 1px solid #ededed;
  border-bottom: 1px solid #ededed;
  background-color: white;
  "><h2>BUS AKAP</h2><hr>
        <?php

        if(isset($_POST['search']))
        {
            $valueToSearch = $_POST['valueToSearch'];
            // search in all table columns
            // using concat mysql function
            $query = "SELECT * FROM `akap` WHERE CONCAT(`no`, `dari`, `tujuan`, `ac`, `actoilet`,`jamberangkat`) LIKE '%".$valueToSearch."%'";
            $search_result = filterTable($query);

        }
         else {
            $query = "SELECT * FROM `akap`";
            $search_result = filterTable($query);
        }

        // function to connect and execute the query
        function filterTable($query)
        {
            include("./../koneksi.php");
            $filter_Result = mysqli_query($koneksi, $query);
            return $filter_Result;
        }

        ?>
        <form action="" method="post">
            <div class="input-group col-lg-6">
                <input type="text" class="form-control" name="valueToSearch" placeholder="Cari Data">
				    <span class="input-group-btn">
					   <!-- tombol search dan reset -->
					   <input class="btn btn-success" type="submit" name="search" value="CARI">
					   <a href="" class="btn btn-warning">RESET</a>
				    </span>
            </div><br>
            <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th class="text-center" rowspan="2">NO</th>
                      <th class="text-center" rowspan="2">Trayek</th>
                      <th class="text-center" colspan="2">Tarif</th>
                      <th class="text-center" rowspan="2">Jam Berangkat</th>
                      <th class="text-center" rowspan="2">Rincian</th>
                  </tr>
                  <tr>
                      <th class="text-center">AC</th>
                      <th class="text-center">AC + Toilet</th>
                  </tr>
              </thead>
                <tbody>
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)){
                    $ac = $row["ac"];
                    $actoilet = $row["actoilet"];
                    $acnominal = number_format($ac);
                    $actoiletnominal = number_format($actoilet);
                    echo "
                    <tr>
                    <td class='text-center' style='width:20px'>" . $row["no"]. "</td>
                    <td>" . $row["dari"]. " - " . $row["tujuan"]. "</td>
                    <td>Rp.".$acnominal."</td>
                    <td>Rp.".$actoiletnominal."</td>
                    <td class='text-center'>" . $row["jamberangkat"]. "</td>
                    <td class='text-center'><a href='?r=rute" . $row["no"]. "'>Tampilkan Rincian</a></td>
                    </tr>
                    ";
                }?>
                    </tbody>
            </table>
        </form>
</div><br><br>
</div>