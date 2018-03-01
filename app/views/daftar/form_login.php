<style>
h3.ex1 {
    font: 30px Candara;
	color: black;
	text-align: center;
	background-image: "../admin/images/LOGO_KIGSB.png";
	
}

</style>

<div class="card card-login mx-auto mt-5">
      <div class="card-header">
      <div class="card-body">
                    <div class="panel-heading">
                        <h3 class="ex1">Log Masuk</h3>
                    </div>
		  <br>
                    <div class="panel-body">
                       <?php 
                        email_check();
						password_check();
						
                        ?>
                        <form role="form" action="" method="post">
                            <?php login_user(); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="k_email" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="k_password" type="password" value="" min="8" maxlength="13" required>
                                </div>
		
                                <div class="form-group">
                                    <label>
                                        <a href="?pages=daftar">Staff baru? Sila daftar !</a>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>