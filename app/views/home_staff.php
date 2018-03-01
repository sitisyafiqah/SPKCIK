<?php

if(isset ($_GET['pages']))
{
    $pages_url = $_GET['pages'];
}else
{
    $pages_url = "no page";
}

?>
<?php require MODEL_ROOT . '/admin/functions.php';?>

<!DOCTYPE html>
<html lang="en">

<?php require VIEW_ROOT . '/staff/header.php'; ?>

<?php staff_session();?>
	
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php require VIEW_ROOT . '/staff/navigation.php'; ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
<!--
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
-->
      <div class="row">
        <div class="col-12">
          <p style="font-family: Arial; font-color: navy; text-align: center;  font-size: 30px"><img src="../admin/images/LOGO_KIGSB.png" style=" width:10%; height:80px ">SISTEM PENGURUSAN KURSUS CELIK IT KELANTAN</p>
			
			<br><br>
			
			<?php
			
			if($pages_url == "tambah_peserta")
			{
				require VIEW_ROOT . '/admin/form_admin/form_add_peserta.php';
				
			}elseif($pages_url == "senarai_peserta")
			{
				require VIEW_ROOT . '/admin/form_admin/form_list_peserta.php';
				
			}elseif($pages_url == "tambah_kursus")
			{
				require VIEW_ROOT . '/admin/form_admin/form_add_kursus.php';
				
			}elseif($pages_url == "edit_peserta")
			{
				require VIEW_ROOT . '/admin/form_admin/form_edit_peserta.php';
				
			}elseif($pages_url == "display_kursus")
			{
				require VIEW_ROOT . '/admin/form_admin/form_display_kursus.php';
				
			}elseif($pages_url == "display_tahun")
			{
				require VIEW_ROOT . '/admin/form_admin/form_display_tahun.php';
				
			}elseif($pages_url == "profile")
			{
				require VIEW_ROOT . '/staff/form_staff/form_display_staff.php';
				
			}elseif($pages_url == "parlimen")
			{
				require VIEW_ROOT . '/admin/form_admin/form_display_parlimen.php';
				
			}elseif($pages_url == "display_staff")
			{
				require VIEW_ROOT . '/admin/form_admin/form_display_staff.php';
				
			}elseif($pages_url == "display_peserta")
			{
				require VIEW_ROOT . '/admin/form_admin/form_display_peserta.php';
				
			}elseif($pages_url == "logout")
			{
				staff_logout();
				
			}elseif($pages_url == "edit_profile")
			{
				require VIEW_ROOT . '/staff/form_staff/form_edit_staff.php';
			}
			
			
			?>
			
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © KIGSB Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Log Keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Tekan Log Keluar dibawah jika anda ingin tamatkan sesi anda.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="?pages=logout">Log Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <?php require VIEW_ROOT . '/staff/footer.php'; ?>
  </div>
</body>

</html>
