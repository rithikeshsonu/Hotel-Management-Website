<?php
// hostname
$hname = 'localhost'; 
// username 
$uname = 'root';
// password
$pass = '';
// Database
$db = 'hotelmgmtwebsite';
// Establishing SQL connection and setting it to a variable .
$con = mysqli_connect($hname, $uname, $pass, $db);
    
// If connection is not established, then an error should be shown 
if(!$con){
    die("Cannot connect to database". mysqli_connect_error());
}
function filteration($data){
    foreach($data as $key => $value){
        $data[$key]  = trim($value);
        $data[$key]  = stripcslashes($value);
        $data[$key]  = htmlspecialchars($value);
        $data[$key]  = strip_tags($value);
    }
    return $data;
}
function select($sql, $values, $datatypes){
    $con = $GLOBALS['con']; //Use GLOBALS to use variables out of scope
    if($stmt = mysqli_prepare($con, $sql)){
        // ...$values -> We can pass as many values as possible with splat operator '...' 
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt); //closing prepare statement
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query can not be prepared - Select");
        } 
    }
    else{
        die("Query can not be executed - Select");
    }
}
function update($sql, $values, $datatypes){
    $con = $GLOBALS['con']; //Use GLOBALS to use variables out of scope
    if($stmt = mysqli_prepare($con, $sql)){
        // ...$values -> We can pass as many values as possible with splat operator '...' 
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt); //closing prepare statement
            return $res;
        }
        else{
            mysqli_stmt_close($stmt);
            die("Query can not be prepared - Update");
        } 
    }
    else{
        die("Query can not be executed - Update");
    }
}
?>