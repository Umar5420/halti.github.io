<?php
include '../db.php';
session_start();

if (isset($_SESSION['user'])) {

}
else{
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard,  bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"  >
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and 
    clean admin dashboard template, inpired from Bootstrap Framework"/>
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin By Umar</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css"
    />
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css" />
    <link href="dist/css/style.min.css" rel="stylesheet" />

  </head>

  