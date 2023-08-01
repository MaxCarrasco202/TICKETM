<?php
session_start();
include './lib/class_mysql.php';
include './lib/config.php';
header('Content-Type: text/html; charset=UTF-8');  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SOPORTE TECNICO FACULTAD INGENIERIA INFORMATICA Y SISTEMAS </title>
        <?php include "./inc/links.php"; ?>        
    </head>
    <body>   
        <?php include "./inc/navbar.php"; ?>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="page-header">
                <h1 class="animated lightSpeedIn">Universidad  <small>Micaela Bastidas</small></h1>
                <span class="label label-danger"></span>
                <p class="pull-right text-primary">
                  <strong>
                  <?php include "./inc/timezone.php"; ?>
                 </strong>
               </p>
              </div>
            </div>
          </div>
        </div>
        <?php
            if(isset($_GET['view'])){
                $content=$_GET['view'];
                $WhiteList=["index","soporte","ticket","ticketcon","registro",""];
                if(in_array($content, $WhiteList) && is_file("./user/".$content."-view.php")){
                    include "./user/".$content."-view.php";
                }else{
        ?>
                
        <?php
                }
            }else{
                include "./user/index-view.php";
            }
        ?>

        
      <?php include './inc/footer.php'; ?>
    </body>
</html>
