<?php

if(isset($_GET['kursus_tahun']))
{
    $kursus_tahun = $_GET['kursus_tahun'];
}

    $query = query("SELECT * FROM kigsb_kursus WHERE kursus_tahun = '{$kursus_tahun}'");
    confirm($query);
?>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px"><?php echo $kursus_tahun ?></h2>
<div class='container'>
    <div class='row'>
        <h1 class="page-header">
        </h1>
        <div class="panel-body">
             <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
							<th>Kursus ID</th>
							<th>Tahun</th>
							<th>Kursus</th>
                            <th>Nama</th>
                            <th>Num Ic</th> 
							<th>Parlimen</th>
							<th>Dun</th>
                            <th>Tarikh</th>
<!--
							<th>Dun</th>
							<th>Action</th>
-->
                       

                        </tr>
                    </thead>
                    <tbody>
                        <?php
    $bil = 0;
    while($row = fetch_array($query))
    {
		$kursus_id = $row['kursus_id'];
		$kursus_tahun = $row['kursus_tahun'];
		$kursus_name = $row['kursus_name'];
        $k_nama = $row['k_nama'];
        $k_ic = $row['k_ic'];
		$k_parlimen = $row['k_parlimen'];
		$k_dun = $row['k_dun'];
		$kursus_tarikh = $row['kursus_tarikh'];
      
        $bil++;

                        ?>    

                        <tr class="odd gradex">
                            <td><?php echo $bil; ?></td>
							<td><?php echo _e($kursus_id); ?></td>
							<td><?php echo _e($kursus_tahun); ?></td>
							<td><?php echo _e($kursus_name); ?></td>
                            <td><?php _e($k_nama);?></td>
                            <td><?php echo _e($k_ic); ?></td>
							<td><?php echo _e($k_parlimen); ?></td>
							<td><?php echo _e($k_dun); ?></td>
                            <td><?php echo _e($kursus_tarikh); ?></td>
						

                        </tr>
                        <?php
    }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
<?php