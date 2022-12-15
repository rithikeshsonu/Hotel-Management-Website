<?php 
require('include/essentials.php');
require('include/db_config.php');
session_start();

if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
    // header("location: index.php"); // works same as window.location.href(JS)
    // echo "<script> window.location.href = 'dashboard.php'; </script>";
    redirect('dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login panel</title>
    <?php 
    require('include/links.php');
    ?>
    <style>
        /* Brings the div to center of the page wrt x and y axes  */
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">
    <div class = "login-form text-center rounded bg-white shadow overflow-hidden">
        <!-- In GET - Data goes through URL Unsecure - non sensitive data will be sent here.  -->
        <!-- IN POST - Data goes through form .... Sensitive data will  be sent  -->
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin login panel</h4>
            <div class="p-4">
                <div class="mb-3 ">
                    <input type="text" name="admin_name" class="form-control shadow-none text-center" placeholder = "Admin Name" required>
                </div>
                <div class="mb-3 ">
                    <input type="password"  name = "admin_pass" class="form-control shadow-none text-center" placeholder="Password" required>
                </div>
                <button type="submit" name = "login" class="btn text-white custom-bg shadow-none">Login</button>
            </div>
        </form>
    </div>

    <!-- PHP start  -->
    <?php 
    
    if(isset($_POST['login']))
    {
        $frm_data = filteration($_POST); //Filters data and stores in frm_data variable
        // echo "<h1>$frm_data[admin_name]</h1>";
        // echo "<h1>$frm_data[admin_pass]</h1>";
        $query = "SELECT * FROM `admin_cred` where `admin_name` = ? and `admin_pass` = ?"; //Query according to prepare statement
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']]; //2 values stores in values variable
        // $datatypes = "ss"; //s = string

        $res = select($query, $values, 'ss');
        // print_r($res);
        // if res has num_rows = 1 
        if($res -> num_rows == 1){
            $row = mysqli_fetch_assoc($res);
            // session_start(); //Can't be having two session starts in the same page
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');
        }
        else{
            alert('error',  'login failed - Invalid credentials!');
        }
    }




    ?>









    <?php require('include/scripts.php')?>
</body>
</html>