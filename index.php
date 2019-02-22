<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="c.css">
    <link rel="stylesheet"  href="in.js">
    <link rel="stylesheet"  href="aa.css">
    <link rel="stylesheet"  href="a.js">
   
    
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  
</head>
<body>
<div>
    <div class="navbar-component">
      <!-- Class `area` is a container -->
      <div class="navbar area ">
        <!-- Logo -->
        <a href="#" class="brand">Brand</a>
        <!-- List of links -->
        <nav role="navigation" id="navigation" class="list">
          <a href="#" class="item -link">Home</a>
        
        
        </nav>
        <!-- Button to toggle the display menu  -->
        <button data-collapse data-target="#navigation" class="toggle">
          <!-- Hamburger icon -->
          <span class="icon"></span>
        </button>
      </div>
    </div>

  

</div>
<div>

                <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="index.php?module=project&action=project_seletc">PROJECT</a>
                <a href="index.php?module=budget&action=butget_seletc">BUDGET</a>
                <a href="index.php?module=test1&action=b">Clients</a>
                <a href="#">Contact</a>
                </div>

                <button class="openbtn" onclick="openNav()">☰ MENU</button>  
               

                <script>
                function openNav() {
                document.getElementById("mySidepanel").style.width = "15%";
              
                
                }

                function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
                }
                </script>
</div>

      
<div>

้<?php
if(empty($_GET['action'])){ //ถ้าตัวแปร module หรือ action 
  
  $action='home';
}else{
$module =$_GET['module'];
$action =$_GET['action']; //เก็บชื่อ files
}


include("$module/$action.php");


?>

</div>
</div>

</body>
</html>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

   