<?php

$k_email = $_SESSION['k_email'];

$query = query("SELECT * FROM kigsb_staff WHERE k_email = '{$k_email}'");
    confirm($query);

while ($row = mysqli_fetch_assoc($query))
{
    $k_nama = $row['k_nama'];
    $k_ic = $row['k_ic'];
    $k_phone = $row['k_phone'];
    $k_alamat = $row['k_alamat'];
	$k_jawatan = $row['k_jawatan'];
	$k_image = $row['k_image'];

}

?>

<style>
h2.ex1 {
    font: 40px Berlin Sans FB;
	color: black;
	text-align: center;
	
	
}
	
	form.ex1 {
    font: 20px Candara;
	color: black;
	text-align: center;
/*	background-image: "../admin/images/LOGO_KIGSB.png";*/
	
}

</style>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">PROFILE</h2>
<div class="col-lg-12">
    <form class="ex1" role="form" action="" method="post" enctype="multipart/form-data">
<?php edit_staff(); ?>
			<div class="form-group">
			<label>Gambar</label><br>
           <img src="../admin/images/<?php echo $k_image?>" alt="<?php echo $k_image?>" class="thumbnail" style="width: 20%; dislay: block;" width="80%" height="110px" >
           
        </div>
		
        <div class="form-group">
            <label>Nama : <?php echo $k_nama ?></label>
        </div>
        
        <div class="form-group">
            <label>Kad Pengenalan : <?php echo $k_ic ?></label>
        </div>
        
        <div class="form-group">
            <label>Nombor Telefon : <?php echo $k_phone ?></label>
        </div>
		
		<div class="form-group">
            <label>Email : <?php echo $k_email ?></label>
        </div>
		
		<div class="form-group">
            <label>Alamat : <?php echo $k_alamat ?></label>
        </div>
		
		<div class="form-group">
            <label>Jawatan : <?php echo $k_jawatan ?></label>
        </div>
		
        <a class="btn btn-warning btn-xs" href="index.php?pages=edit_profile&k_ic=<?php echo $k_ic ?>" role="button">
                                    <i class="fa fa-fw fa-file"></i>
                                </a>
    </form>
</div>