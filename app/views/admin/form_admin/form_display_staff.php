<?php

if(isset($_GET['k_ic']))
{
    $k_ic = $_GET['k_ic'];
}

    $query = query("SELECT * FROM kigsb_staff WHERE k_ic = '{$k_ic}'");
    confirm($query);

while ($row = mysqli_fetch_assoc($query))
{
    $k_nama = $row['k_nama'];
    $k_ic = $row['k_ic'];
    $k_phone = $row['k_phone'];
	$k_email = $row['k_email'];
	$k_alamat = $row['k_alamat'];
	$k_jawatan = $row['k_jawatan'];
	$k_image = $row['k_image'];
	$k_role = $row['k_role'];
}

?>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">Maklumat Staff</h2>
<div class="col-lg-6">
	
	<?php email_success_register();
	?>
	
    <form role="form" action="" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label>Gambar</label><br>
           <img src="images/<?php echo $k_image?>" alt="<?php echo $k_image?>" class="thumbnail" style="width: 20%; dislay: block;" width="80%" height="100px" >
           
        </div>
		
        <div class="form-group">
            <label>Nama :</label>
            <input type="text" class="form-control" name="k_nama" value="<?php echo $k_nama ?>" readonly>
        </div>
        
        <div class="form-group">
            <label>Kad Pengenalan :</label>
            <input type="text" class="form-control" name="k_ic" min="12" maxlength="12" value="<?php echo $k_ic ?>"  readonly>
        </div>
        
        <div class="form-group">
            <label>Nombor Telefon :</label>
            <input type="text" class="form-control" name="k_phone" maxlength="11" value="<?php echo $k_phone ?>" readonly>
        </div>
		
		<div class="form-group">
            <label>Email :</label>
            <input type="text" class="form-control" name="k_email" value="<?php echo $k_email ?>" readonly>
        </div>
		
		
		<div class="form-group">
            <label>Alamat :</label>
            <input type="text" class="form-control" name="k_alamat" value="<?php echo $k_alamat ?>" readonly>
        </div>
		
		<div class="form-group">
            <label>Jawatan :</label>
            <input type="text" class="form-control" name="k_jawatan" value="<?php echo $k_jawatan ?>" readonly>
        </div>
		
		<div class="form-group">
            <label>Role :</label>
            <select class="form-control" name="k_role" readonly>
                <option value="<?php echo $k_role ?>"><?php echo $k_role ?></option>
                <option value="ADMIN">ADMIN</option>
				<option value="STAFF">STAFF</option>
            </select>
        </div>
		
	
        
         <a class="btn btn-warning btn-xs" href="index.php?pages=edit_profile&k_ic=<?php echo $k_ic ?>" role="button">
                                    <i class="fa fa-fw fa-file"></i>
                                </a>
    </form>
</div>