<?php

if(isset($_GET['k_ic']))
{
    $k_ic = $_GET['k_ic'];
}

    $query = query("SELECT * FROM kigsb_kursus WHERE k_ic = '{$k_ic}'");
    confirm($query);


?>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">Senarai Maklumat</h2>
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
							<th>Tarikh</th>
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
		$kursus_tarikh = $row['kursus_tarikh'];
      
        $bil++;

                        ?>    

                        <tr class="odd gradex">
                            <td><?php echo $bil; ?></td>
							<td><?php echo _e($kursus_id); ?></td>
							<td><?php echo _e($kursus_tahun); ?></td>
							<td><?php echo _e($kursus_name); ?></td>
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