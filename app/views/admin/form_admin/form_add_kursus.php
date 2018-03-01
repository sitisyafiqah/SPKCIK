<?php

if(isset($_GET['k_ic']))
{
    $k_ic = $_GET['k_ic'];
}

     $query = query("SELECT * FROM kigsb_peserta WHERE k_ic = '{$k_ic}'");
    confirm($query);
while ($row = mysqli_fetch_assoc($query))
{
    $k_nama = $row['k_nama'];
    $k_ic = $row['k_ic'];
	$k_parlimen= $row['k_parlimen'];
	$k_dun = $row['k_dun'];
    
}
?>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">Kursus Baru</h2>
<div class="col-lg-6">
    <form role="form" action="" method="post" enctype="multipart/form-data">
        <?php add_kursus(); ?>
		
		<div class="form-group">
            <label>Kursus :</label>
            <select class="form-control" name="kursus_name" required>
                <option value=""></option>
				
				
				 <?php
			  
			  $query = query("SELECT * FROM kigsb_kursuss");
    confirm($query);
			   while($row = fetch_array($query))
                        {
				    $kursus_name = $row['kursus_name'];
				   
				   
                          ?>

				
				<option value="<?php echo $kursus_name ?>"><?php echo $kursus_name ?></option>
			  
			  <?php
			   }
			  ?>
				
            </select>
        </div>
		
		<div class="form-group">
            <label>Tahun :</label>
            <select class="form-control" name="kursus_tahun" required>
                <option value=""></option>
                <?php
			  
			  $query = query("SELECT * FROM kigsb_tahun");
    confirm($query);
			   while($row = fetch_array($query))
                        {
				    $kursus_tahun = $row['kursus_tahun'];
				   
				   
                          ?>

				
				<option value="<?php echo $kursus_tahun ?>"><?php echo $kursus_tahun ?></option>
			  
			  <?php
			   }
			  ?>
            </select>
        </div>
		
	
        <div class="form-group">
            <label>Nama :</label>
            <input type="text" class="form-control" name="k_nama" value="<?php echo $k_nama ?>" readonly>
        </div>
        
        <div class="form-group">
            <label>Kad Pengenalan :</label>
            <input type="text" class="form-control" name="k_ic" value="<?php echo $k_ic ?>" readonly>
        </div>
		
		<div class="form-group">
            <label>Parlimen :</label>
            <input type="text" class="form-control" name="k_parlimen" value="<?php echo $k_parlimen ?>" readonly>
        </div>
       
		<div class="form-group">
            <label>Dun :</label>
            <input type="text" class="form-control" name="k_dun" value="<?php echo $k_dun ?>" readonly>
        </div>
		
		<div class="form-group">
            <label>PI1M :</label>
            <input type="text" class="form-control" name="k_pi1m" value="">
        </div>
		
         <div class="form-group">
            <label>Tarikh</label>
            <input type="date" class="form-control" name="kursus_tarikh" >
        </div>
        
        <button type="submit" name="tambah" class="btn btn-default">Tambah Kursus</button>
        <button type="reset" class="btn btn-default">Reset Button</button>
    </form>
</div>