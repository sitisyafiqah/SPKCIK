

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
<?php require VIEW_ROOT . '/admin/header.php'; ?>


<style>
p.ex1 {
    font: 40px Arial;
	color: floralwhite;
	text-align: center;
	
	
}
	

</style>

<body class="bg-dark">

<div class="container">
	
	<p class="ex1"><img src="../admin/images/LOGO_KIGSB.png" style=" width:10%; height:100px ">KELANTAN ICT GATEWAY SDN BHD</p>
        
	</div>
	
	
	 <?php
            
            if ($pages_url == "daftar")
            {
                require VIEW_ROOT . '/daftar/form_daftar.php';
            }
            else
            {
               require VIEW_ROOT . '/daftar/form_login.php';
            }
            
            ?>
	
</body>
<?php require VIEW_ROOT . '/admin/footer.php'; ?>
