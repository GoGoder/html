<?php
session_start();


$president="president";
$teacher="teacher";
$student="student";

$prID="president";
$prPWD="1";
$teID="teacher";
$tePWD="2";
$stID="student";
$stPWD="3";

$web=$_POST["web"];

$id=$_POST["ID"];
$pwd=$_POST["pwd"];

if($web==$president){
    if(($prID==$id)&&($prPWD==$pwd)){
    $_SESSION["login"]="YES";
    header("Location:president.php");
    }else{
        $_SESSION["login"]="No";
        header("Location:fail.php");
    }

}

if($web==$teacher){
    if(($teID==$id)&&($tePWD==$pwd)){
    $_SESSION["login"]="YES";
    header("Location:teacher.php");
    }else if(($prID==$id)&&($prPWD==$pwd)){
        $_SESSION["login"]="YES";
        header("Location:teacher.php");
    }else{
        $_SESSION["login"]="No";
        header("Location:fail.php");
    }

}

if($web==$student){
    if(($stID==$id)&&($stPWD==$pwd)){
    $_SESSION["login"]="YES";
    header("Location:student.php");
    }else if(($teID==$id)&&($tePWD==$pwd)){
        $_SESSION["login"]="YES";
        header("Location:student.php");
    }else{
        $_SESSION["login"]="No";
        header("Location:fail.php");
    }

}




?>