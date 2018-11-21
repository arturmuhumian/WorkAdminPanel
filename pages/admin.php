<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['iduser']) or !isset($_SESSION['login']))
    header('Location: ../index.php');
  require_once "../php/action.php";
  require_once "../php/setter.php";
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Модули</title>
    
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
  </head>
  <body>
    <?php include "../dynamic/header.php"; ?>
    
    <div class="container-fluid">
      <div class="row">
        <?php include "../dynamic/sidebar.php"; ?>
        <div class="col-md-10">
          <div class="row main-page">
            <h2 style="padding: 10px 5px 10px 39px;"><i class="fas fa-home"></i>
            Главная страница</h2>
            <p style="font-size: 14px; padding: 10px 5px 10px 39px;">Главная страница панели управления</p>
          </div>
          
          <div class="container-fluid">
            <div class="row admin-inform">
              <p class="fast-way">Доступные модули</p>
              <div class="row">
                <!-- Начало доступных модулей -->
                <?php
                  if (isset($_SESSION['SUPER_USER'])) {
                    //показать все модули
                    include "../modules/mod1.php";
                    include "../modules/mod2.php";
                    include "../modules/mod3.php";
                    include "../modules/mod7.php";
                  }
                  else
                  {
                    $showmodul = new WorkForm();
                    $showmodul->availableModules("req");
                  }
                ?>
                <!-- Конец -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <script>
    $(document).ready(function(){
    $(".admin-exit").click(function(){
    $(".mdl1").show();
    $(".js").show();
    });
    
    $(".close").click(function(){
    $(".mdl1").hide();
    $(".js").hide();
    
    });
    $(".no").click(function(){
    $(".mdl1").hide();
    $(".js").hide();
    });
    
    });
    </script> -->
  </body>
</html>