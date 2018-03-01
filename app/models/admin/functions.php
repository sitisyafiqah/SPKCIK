<?php

//helper function

function _e($string)
{
    echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function last_id()
{
    global $con;
    
    return mysqli_insert_id($con);
}

function set_message($msg)
{
    if(!empty($msg))
    {
        $_SESSION['message'] = $msg;
    }else
    {
        $msg = "";
    }
}

function display_message()
{
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        echo ($_SESSION['message']);
    }
}

function redirect($location)
{
    header("Location: $location");
}

function query ($sql)
{
    global $con;
    return mysqli_query($con, $sql);
}

function confirm($result)
{
    global $con;
    if(!$result)
    {
        die("QUERY FAILED" . mysqli_error($con));
    }
}

function escape_string($string)
{
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function fetch_array($result)
{
    return mysqli_fetch_array($result);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function add_peserta()
{
    if(isset($_POST['tambah']))
    {
		//$k_tahun = $_POST['k_tahun'];
		$k_nama = escape_string($_POST['k_nama']);
		$k_ic = $_POST['k_ic'];
		$k_phone = escape_string($_POST['k_phone']);
		$k_parlimen = escape_string($_POST['k_parlimen']);
		$k_dun = escape_string($_POST['k_dun']);
		
			
 
        
        $query = query("INSERT INTO kigsb_peserta(k_nama,k_ic,k_phone,k_parlimen,k_dun)
        
        VALUES('{$k_nama}','{$k_ic}','{$k_phone}','{$k_parlimen}','{$k_dun}')");
        confirm($query);
        //set_message("New Car Just Added");
        redirect("index.php?pages=senarai_peserta");
        
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function edit_peserta()
{
    if(isset($_POST['edit']))
    {
		$k_ic = $_GET['k_ic'];
		$k_phone = escape_string($_POST['k_phone']);
		$k_parlimen = escape_string($_POST['k_parlimen']);
		$k_dun = escape_string($_POST['k_dun']);
	        
        $query = query("UPDATE kigsb_peserta SET k_phone = '{$k_phone}',k_parlimen = '{$k_parlimen}',k_dun = '{$k_dun}' WHERE k_ic = '{$k_ic}' ");
        confirm($query);
        //set_message("New Car Just Added");
        redirect("index.php?pages=senarai_peserta");

        
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function delete_peserta()
{
    if(isset($_POST['delete']))
    {

        $k_ic = $_POST['k_ic'];
        $query = query("DELETE FROM kigsb_peserta WHERE k_ic = '{$k_ic}' ");
        confirm($query);
		
		
		$query = query("DELETE FROM kigsb_kursus WHERE k_ic = '{$k_ic}' ");
        confirm($query);
		
        redirect("index.php?pages=senarai_peserta");
    }

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function add_staff()
{
    if(isset($_POST['tambah']))
    {
		
		$k_email = escape_string($_POST['k_email']);
		$k_nama = escape_string($_POST['k_nama']);
		$k_ic = escape_string($_POST['k_ic']);
		$k_phone = escape_string($_POST['k_phone']);
		$k_password = escape_string($_POST['k_password']);
		$k_alamat = escape_string($_POST['k_alamat']);
        $k_jawatan = escape_string($_POST['k_jawatan']);
		$k_role = escape_string($_POST['k_role']);
		
		
		$k_image = $_FILES['file']['name'];
        $image_temp_location = $_FILES['file']['tmp_name'];


        move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $k_image);
		
		
		 $email_query = query("SELECT * FROM kigsb_staff WHERE k_email = '{$k_email}'");
        //check email to make sure email is not exist
        if(mysqli_num_rows($email_query) == 1)
        {
            //if there is existed email, registeration failed
            $_SESSION['existed_email'] = $k_email;
            email_exist();

            //if email existd, asign email inside session. this session will allow a message to display
            //"Email already registered". this session is related to email_exist() function.
            //redirect("index.php?pages=registeration");
            //redirect back to register page
        }
        else
		{
			
			
			 $query = query("INSERT INTO kigsb_staff(k_email,k_image,k_nama,k_ic,k_phone,k_password,k_alamat,k_jawatan,k_role)
        
        VALUES('{$k_email}','{$k_image}','{$k_nama}','{$k_ic}','{$k_phone}','{$k_password}','{$k_alamat}','{$k_jawatan}','{$k_role}')");
			
			 confirm($query);
	
	
       $_SESSION['success_register'] = 'success';
       
        redirect("index.php");
		}
			
        
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function edit_staff()
{
    if(isset($_POST['edit']))
    {
		$k_ic = $_GET['k_ic'];
		$k_email = $_POST['k_email'];
		$k_phone = $_POST['k_phone'];
		$k_alamat = $_POST['k_alamat'];
        $k_jawatan = $_POST['k_jawatan'];
		//$k_role = $_POST['k_role'];
		
	     
		   $k_image = $_FILES['file']['name'];
        $image_temp_location = $_FILES['file']['tmp_name'];

        move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $k_image);

        if(empty($k_image)){
            // check if not update any image, use the old one from db
            $query_img = query("SELECT * FROM kigsb_staff WHERE k_ic = '$k_ic' ");
            confirm($query_img);

            while($row = mysqli_fetch_assoc($query_img)){

                $k_image = $row['k_image'];
            }   
        }
		
        $query = query("UPDATE kigsb_staff SET k_image = '{$k_image}', k_phone = '{$k_phone}',k_alamat = '{$k_alamat}', k_jawatan = '{$k_jawatan}' WHERE k_ic = '{$k_ic}' ");
        confirm($query);
        //set_message("New Car Just Added");
        redirect("index.php?pages=profile");

        
    }
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function edit_staff_admin()
{
    if(isset($_POST['edit']))
    {
		$k_ic = $_GET['k_ic'];
		$k_email = $_POST['k_email'];
		$k_phone = $_POST['k_phone'];
		$k_alamat = $_POST['k_alamat'];
        $k_jawatan = $_POST['k_jawatan'];
		$k_role = $_POST['k_role'];
		
	     
		  $k_image = $_FILES['file']['name'];
        $image_temp_location = $_FILES['file']['tmp_name'];

        move_uploaded_file($image_temp_location , UPLOAD_DIRECTORY . DS . $k_image);

        if(empty($k_image)){
            // check if not update any image, use the old one from db
            $query_img = query("SELECT * FROM kigsb_staff WHERE k_ic = '$k_ic' ");
            confirm($query_img);

            while($row = mysqli_fetch_assoc($query_img)){

                $k_image = $row['k_image'];
            }   
        }
		
        $query = query("UPDATE kigsb_staff SET k_image = '{$k_image}', k_phone = '{$k_phone}',k_alamat = '{$k_alamat}', k_jawatan = '{$k_jawatan}', k_role = '{$k_role}' WHERE k_ic = '{$k_ic}' ");
        confirm($query);
        //set_message("New Car Just Added");
        redirect("index.php?pages=profile");

        
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function delete_staff()
{
    if(isset($_POST['delete']))
    {

        $k_ic = $_POST['k_ic'];
        $query = query("DELETE FROM kigsb_staff WHERE k_ic = '{$k_ic}' ");
        confirm($query);
		
        redirect("index.php?pages=senarai_staff");
    }

}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function add_kursus()
{
    if(isset($_POST['tambah']))
    {
		$k_ic = $_GET['k_ic'];
		$kursus_name = escape_string($_POST['kursus_name']);
		$kursus_tahun = $_POST['kursus_tahun'];
		$k_nama = escape_string($_POST['k_nama']);
		$k_parlimen = escape_string($_POST['k_parlimen']);
			$k_dun = escape_string($_POST['k_dun']);
		$k_pi1m = escape_string($_POST['k_pi1m']);
		$kursus_tarikh = $_POST['kursus_tarikh'];
			
 
                $sub_num_length = 5;
                $charset = "1234567890";
                
                for ($x=1; $x<=$sub_num_length; $x++)
                {
                    $rand = rand() % strlen($charset);
                    $temp = substr($charset, $rand, 1);
                    
                    $kursus_id = $kursus_id . $temp;
                }
                
                $new_kursus_id = "KIGSB_" . $kursus_id;
		
        $query = query("INSERT INTO kigsb_kursus(kursus_id,kursus_name,kursus_tahun,k_nama,k_ic,k_parlimen,k_dun,k_pi1m,kursus_tarikh)
        
        VALUES('{$new_kursus_id}','{$kursus_name}','{$kursus_tahun}','{$k_nama}','{$k_ic}','{$k_parlimen}','{$k_dun}','{$k_pi1m}','{$kursus_tarikh}')");
        confirm($query);
        //set_message("New Car Just Added");
        redirect("index.php?pages=senarai_peserta");
        
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function tambah_kursus()
{
    if(isset($_POST['tambah']))
    {
		$kursus_name = escape_string($_POST['kursus_name']);
 
        
        $query = query("INSERT INTO kigsb_kursuss(kursus_name)
        
        VALUES('{$kursus_name}')");
        confirm($query);
        //set_message("New Car Just Added");
        redirect("index.php?pages=tambah_kursus_baru");
        
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function tambah_tahun()
{
    if(isset($_POST['tambah']))
    {
		$kursus_tahun = escape_string($_POST['kursus_tahun']);
 
        
        $query = query("INSERT INTO kigsb_tahun(kursus_tahun)
        
        VALUES('{$kursus_tahun}')");
        confirm($query);
        //set_message("New Car Just Added");
        redirect("index.php?pages=tambah_tahun");
        
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function login_user()
{
    global $con;

    if(isset($_POST['submit']))
    {
        $k_email = $_POST['k_email'];

        $email_query = query("SELECT * FROM kigsb_staff WHERE k_email = '{$k_email}'");

        if(mysqli_num_rows($email_query) == 0)
        {
            //if there is no similar email with the one that user submitted through form,
            //then we will set a session to tell user the email is not valid registered

            $_SESSION['email_not_valid'] = $k_email;
            redirect("index.php");
        }
        else
        {

            $k_email = $_POST['k_email'];
            $k_password = escape_string($_POST['k_password']);
		

            $query = query("SELECT * FROM kigsb_staff WHERE k_email = '{$k_email}'");

            confirm($query);

            while($row = fetch_array($query))
            {
                $db_k_email = $row['k_email'];
                $db_k_password = $row['k_password'];
                $db_k_role = $row['k_role'];
            }
		
            if($k_email == $db_k_email && $k_password == $db_k_password && $db_k_role == "ADMIN")
            {
                $_SESSION['k_email'] = $db_k_email;
                //$_SESSION['username'] = $db_username;
                $_SESSION['k_role'] = $db_k_role;

                //go to the right page if password and email is correct and user role is admin

                redirect("../admin/index.php");
            }
            elseif($k_email == $db_k_email && $k_password == $db_k_password && $db_k_role == "STAFF")
            {
                $_SESSION['k_email'] = $db_k_email;
                //$_SESSION['username'] = $db_username;
                $_SESSION['k_role'] = $db_k_role;

                //go to the right page if password and email is correct and user role is student

                redirect("../staff/index.php");
            }
            elseif($k_email !== $db_k_email && $k_password !== $db_k_password)
            {
                //go to login page if password or email is incorrect

                redirect("index.php");
				
            }
            else
            {
                //go to login page if two IF above not satisfied

                redirect("index.php");
            }
        }
    }
}


////////////////////////////////////////////////////admin session //////////////////////////////////////////////////////////////////////

function admin_session()
{
    if (isset($_SESSION['k_email']) && $_SESSION['k_role'] == "ADMIN")
    {
        //stay in admin page

    }
    else
    {
        redirect("../login/index.php");
    }

}

////////////////////////////////////////////////admin logout ///////////////////////////////////////////////////////////////////////////

function admin_logout()
{
    unset($_SESSION['k_email']);
    //unset($_SESSION['username']);
    unset($_SESSION['k_role']);

    //delete all session variables
    //session_destroy();

    //jump to login page
    redirect("../login/index.php");

}


///////////////////////////////////////////////////user session ////////////////////////////////////////////////////////////////////////
 
function staff_session() //check if user is a student
{
    if (isset($_SESSION['k_email']) && $_SESSION['k_role'] == "STAFF")
    {
        //stay in user page

    }
    else
    {
        redirect("../login/index.php");
    }

}


////////////////////////////////////////////////////user logout/////////////////////////////////////////////////////////////////////////

function staff_logout() //remove all session for student
{
    unset($_SESSION['k_email']);
    //unset($_SESSION['user_role']);
    unset($_SESSION['username']);

    //delete all session variables
    //session_destroy();

    //jump to login page
    redirect("../login/index.php");

}


/////////////////////////////////////////////////////////email check////////////////////////////////////////////////////////////////////

function email_check()
{
    if(empty($_SESSION['email_not_valid']))
    {
        //if session is not empty, then display message
    }else
    {

?>      
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Sorry :</strong> <b><?php echo $_SESSION['email_not_valid'] ?></b> is not registered into this system.
</div>
<?php
        unset($_SESSION['email_not_valid']);
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function password_check()
{
    if(empty($_SESSION['password_not_valid']))
    {
        //if session is not empty, then display message
    }else
    {

?>      
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Sorry :</strong> <b><?php echo $_SESSION['password_not_valid'] ?></b> is not registered into this system.
</div>
<?php
        unset($_SESSION['password_not_valid']);
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function email_exist()
{

    if(empty($_SESSION['existed_email'])) // if email not exist,display nothing
    { 

    }
    else  
    {
?>
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Sorry :</strong> <b><?php echo $_SESSION['existed_email'] ?></b> already registered.
</div>

<?php
        unset($_SESSION['existed_email']);
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function email_success_register()
{
    if(empty($_SESSION['success_register'])) //if user_comment from cms_class is empty
    {

    }
    else
    {
?>    
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    You has been registered!
</div>

<?php
        unset($_SESSION['success_register']);

    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>