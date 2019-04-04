<?php

session_start();
session_regenerate_id(TRUE);
if(isset($_SESSION["login"])==false)
{
print "ログインされていません<br />";
print "<a href='../staff_login/staff_login.html'>ログイン画面へ</a>";
exit();
}

if(isset($_POST["disp"])==TRUE){
    if(isset($_POST["staffcode"])==FALSE){
        header("location: staff_ng.php");
        exit();
    }
    $staff_code=$_POST["staffcode"];
    header("location: staff_disp.php?staffcode=".$staff_code);
    exit();
}

if(isset($_POST["add"])==TRUE){
    header("location: staff_add.php");
    exit();
}

if(isset($_POST["edit"])==TRUE){
    
    if(isset($_POST["staffcode"])==FALSE){
        header("location: staff_ng.php");
        exit();
    }
    $staff_code= $_POST["staffcode"];
    header("location: staff_edit.php?staffcode=".$staff_code);
    exit();
}

if(isset($_POST["delete"])==TRUE){
    
    if(isset($_POST["staffcode"])==FALSE){
        header("location: staff_ng.php");
        exit();
    }
    $staff_code=$_POST["staffcode"];
    header("location: staff_delete.php?staffcode=".$staff_code);
    exit();
}
?>