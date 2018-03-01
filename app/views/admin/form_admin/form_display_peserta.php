

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
    $k_phone = $row['k_phone'];
	$k_parlimen = $row['k_parlimen'];
    $k_dun = $row['k_dun'];

}

?>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">Maklumat Peserta</h2>
<div class="col-lg-6">
    <form role="form" action="" method="post" enctype="multipart/form-data">
		
	
        <div class="form-group">
            <label>Nama :</label>
            <input type="text" class="form-control" name="k_nama" value="<?php echo $k_nama ?>" readonly>
        </div>
        
        <div class="form-group">
            <label>Kad Pengenalan :</label>
            <input type="text" class="form-control" name="k_ic" value="<?php echo $k_ic ?>" readonly>
        </div>
        
        <div class="form-group">
            <label>Nombor Telefon :</label>
            <input type="text" class="form-control" name="k_phone" value="<?php echo $k_phone ?>" readonly>
        </div>
		
		<div class="form-group">
            <label>Parlimen :</label>
            <input type="text" class="form-control" name="k_parlimen" value="<?php echo $k_parlimen ?>" readonly>
        </div>
		
		
		<div class="form-group">
            <label>Parlimen :</label>
            <input type="text" class="form-control" name="k_dun" value="<?php echo $k_dun ?>" readonly>
        </div>
        
		
    </form>
</div>