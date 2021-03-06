<!DOCTYPE html>
<?php
  session_start();
  require_once "../php/action.php";
  require_once "../php/setter.php";

  $acces = new WorkForm();
  $acces->ControlAcces(7);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Просмотр, редактирование и добавление договоров</title>
    
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
<script src="../js/all_query.js"></script>
</head>
<body>
   
   <div class="admin">
          <div class="mdl1"> 
    <p class="close">X</p>
    <p style = "text-align: center; font-size: 22px; margin-top: 50px;">Выйти из профиля?</p>
    <a href="#" class="yes">Да</a>
    <a href="#" class="no">Нет</a>
  
 </div>
</div>
<div class="js"></div>
   <?php include "../dynamic/header.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <?php include "../dynamic/sidebar.php"; ?>
            <div class="col-md-10">
                <div class="row main-page">
                    <h2 style="padding: 10px 5px 10px 39px;"><i class="fas fa-eye"></i>
                   Просмотр и редактирование договоров</h2>
                    <p style="font-size: 14px; padding: 10px 5px 10px 39px;">Полный просмотр и изменение договоров </p>
                    <a href="admin.php" class="before-page" style="margin-left: 30px;"> &larr; Вернуться на главную страницу</a>
                </div>
         
                <div class="container-fluid">
                <div class="row admin-inform">
                   <p class="fast-way">Быстрый доступ к разделам сайта</p>
                     <div class="row">
                        <?php
                            if (isset($_SESSION['SUPER_USER'])) {
                                require_once "../modules/mod8.php";
                                require_once "../modules/mod9.php";
                            }
                            else
                            {
                                if ($acces->ControlAcces(8)) {
                                    require_once "../modules/mod8.php";
                                }
                                if ($acces->ControlAcces(9)) {
                                    require_once "../modules/mod9.php";
                                }
                            }
                            
                        ?>
                     </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>