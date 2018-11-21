<!DOCTYPE html>
<?php
  include "pages/ini.php";
  session_start();
    // if (!isset($_SESSION['iduser']))
      // header('Location: ../index.php');
    require_once "../php/action.php";
    require_once "../php/setter.php";

    $acces = new WorkForm();
    $acces->ControlAcces(56);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Просмотр заявления</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css">
<script src="js/all_query.js"></script>
</head>
<body>
   <?php include "../dynamic/header.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <?php include "../dynamic/sidebar.php"; ?>
            <div class="col-md-10">
                <div class="row main-page">
                    <h2 style="padding: 10px 5px 10px 29px;"><i class="far fa-eye"></i>
                     Полный просмотр заявки</h2>
                    <a href="all_request.php" class="before-page"> &larr; Вернуться на предыдущую страницу</a>
                </div>
                    <div class="col-md-6">
                     <div id="correct-users" class="center-block">
                           <div class="table-responsive" style="max-width: 100%; overflow: auto;">
                              <table style="width:100%">
                                <?php
                                    $show = new WorkForm();
                                    $show->enterTableReq(2);
                                ?>
                              </table>
                           </div>
                           

                    </div>
                </div>
        </div>
    </div>
</div>  
         
    
    
</body>
</html>