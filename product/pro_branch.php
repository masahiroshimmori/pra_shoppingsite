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
    if(isset($_POST["procode"])==FALSE){
        header("location: pro_ng.php");
        exit();
    }
    $pro_code=$_POST["procode"];
    header("location: pro_disp.php?procode=".$pro_code);
    exit();
}

if(isset($_POST["add"])==TRUE){
    header("location: pro_add.php");
    exit();
}

if(isset($_POST["edit"])==TRUE){
    
    if(isset($_POST["procode"])==FALSE){
        header("location: pro_ng.php");
        exit();
    }
    $pro_code= $_POST["procode"];
    header("location: pro_edit.php?procode=".$pro_code);
    exit();
}

if(isset($_POST["delete"])==TRUE){
    
    if(isset($_POST["procode"])==FALSE){
        header("location: pro_ng.php");
        exit();
    }
    $pro_code=$_POST["procode"];
    header("location: pro_delete.php?procode=".$pro_code);
    exit();
}
?>