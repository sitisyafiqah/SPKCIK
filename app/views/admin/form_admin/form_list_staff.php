<style>
h2.ex1 {
    font: 40px Berlin Sans FB;
	color: black;
	text-align: center;
	background-image: "../admin/images/LOGO_KIGSB.png";
	
}
	
	form.ex1 {
    font: 20px Candara;
	color: black;
	text-align: center;
/*	background-image: "../admin/images/LOGO_KIGSB.png";*/
	
}

</style>


<?php

    $query = query("SELECT * FROM kigsb_staff");
    confirm($query);
?>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">SENARAI STAFF</h2>

<div class='container'>
	
    <div class='row'>
		<?php delete_staff(); ?>
		
        <div class="panel-body">
			<center>
             <div class="dataTable_Wrapper">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example"> <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Num Ic</th>                            
							<th>No Telefon</th>
							<th>Role</th>
							<th>Action</th>
                       

                        </tr>
                    </thead>
                    <tbody>
                        <?php
    $bil = 0;
    while($row = fetch_array($query))
    {
        $k_nama = $row['k_nama'];
        $k_ic = $row['k_ic'];
		$k_phone = $row['k_phone'];
		$k_role = $row['k_role'];
      
        $bil++;

                        ?>    

                        <tr class="odd gradex">
                            <td><?php echo $bil; ?></td>
                            <td><?php _e($k_nama);?></td>
                            <td><?php echo _e($k_ic); ?></td>
                            <td><?php echo _e($k_phone); ?></td>
							<td><?php echo _e($k_role); ?></td>
        
                            
                            <td class="center">
                           
                                <a class="btn btn-info btn-xs" href="index.php?pages=edit_staff&k_ic=<?php echo $k_ic ?>" role="button">
<!--                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true">Edit</span>-->
									
									<i class="fa fa-fw fa-edit"></i>
                                </a>
								
								<a class="btn btn-warning btn-xs" href="index.php?pages=display_staff&k_ic=<?php echo $k_ic ?>" role="button">
                                    <i class="fa fa-fw fa-file"></i>
                                </a>
								
								<a class="btn btn-danger btn-xs" role="button" data-toggle="modal" data-target="#myModal<?php echo $k_ic;?>">
                                    <i class="fa fa-fw fa-trash"></i>
                                </a>
								
								<div class="modal fade" id="myModal<?php echo $k_ic;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" ara-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Pengesahan</h4>
                                            </div>
                                            <div class="modal-body">
                                                Adakah anda ingin padam staff ini?<br>"<?php echo $k_ic;?>"
                                            </div>
                                            <div class="modal-footer">
                                                <form class="form-horizontal" role="form" action="" method="post">
                                                    <input type="hidden" name="k_ic" value="<?php echo $k_ic?>"/>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" name="delete" class="btn btn-primary">Ya</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								
								
                            </td>

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
	</center>

<?php