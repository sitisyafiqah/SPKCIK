<style>
h3.ex1 {
    font: 30px Candara;
	color: black;
	text-align: center;
	background-image: "../admin/images/LOGO_KIGSB.png";
	
}

</style>

<div class="card card-login mx-auto mt-100px">
<!--	 <div class="card-header">-->
      <div class="card-body">
                    <div class="panel-heading">
						
                        <h3 class="ex1">Staff Baru</h3>
                    </div>
	 <?php 
		add_staff();
		email_exist();
		
		?>
    <form role="form" action="" method="post" enctype="multipart/form-data">
       

        <div class="form-group">
<!--            <label>Nama :</label>-->
            <input type="text" class="form-control" placeholder="NAMA" name="k_nama" required>
        </div>
        
        <div class="form-group">
<!--            <label>Nombor Telefon :</label>-->
            <input type="text" class="form-control" placeholder="NOMBOR TELEFON" name="k_phone" min="11" maxlength="11" required>
        </div>
		
		<div class="form-group">
<!--            <label>Kad Pengenalan :</label>-->
            <input type="text" class="form-control" placeholder="KAD PENGENALAN" name="k_ic" min="12" maxlength="12" required>
        </div>
		
		<div class="form-group">
<!--            <label>Email :</label>-->
            <input type="email" class="form-control" placeholder="EMAIL" name="k_email" required>
        </div>
		
		<div class="form-group">
<!--            <label>Katalaluan :</label>-->
            <input type="password" class="form-control" placeholder="KATA LALUAN" name="k_password" min="8" maxlength="13" required>
        </div>
	    <div class="form-group">
                                    <label>
                                        <a href="?pages=login">Log Masuk</a>
                                    </label>
        </div>
        
        <button type="submit" name="tambah" class="btn btn-default">Hantar</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
	</div>
</div>