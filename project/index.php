<?php
    include_once "header.php";
    include_once "topnav.php";
?>

<?php
      if(isset($_GET['top']) && $_GET['top']=="sameba"){
         include "view/sameba.php"; 
      }else if(isset($_GET['top']) && $_GET['top']=="baghi"){
         include "view/baghi.php"; 
      }
      else{
         include "view/xidi.php"; 
      }
   ?>