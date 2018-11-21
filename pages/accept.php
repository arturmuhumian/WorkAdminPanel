<!DOCTYPE html>
<?php
  session_start();
  require_once "../php/action.php";
  require_once "../php/setter.php";

  $acces = new WorkForm();
  $acces->ControlAcces(1);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Список пользователей</title>
    
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
                <h2 style="padding: 10px 5px 10px 16px;"><i class="fas fa-check-square"></i>
                Подтверждение пользователей</h2>
                <p style="font-size: 14px; padding: 10px 5px 10px 16px;">Добавление и удаление пользователей</p>
                
                
                
                <form class="search-users" method="post">
                              <input type="text" placeholder="Поиск пользователя" name="forfound" value="<?php echo $_POST['forfound'] ?>">
                              <input type="submit" placeholder="Найти" name="findintousers" value="Найти" id="find">
                    </form>
                   <a href="admin.php" class="before-page"> &larr; Вернуться на главную страницу</a>
                
                
                
              </div>
              <div class="container-fluid">

                <div class="container-fluid">
                <div class="row users-list hidden-xs hidden-sm">
                    <div class="col-md-2 col-xs-2"> <span>ID</span></div>
                    <div class="col-md-2 col-xs-2"> <span>Логин</span></div>
                    <div class="col-md-2 col-xs-2"> <span>Фио</span></div>
                    <div class="col-md-2 col-xs-2"> <span>Почта</span></div>
                    <div class="col-md-2 col-xs-2"> <span>Телефон</span></div>
                    <div class="col-md-2 col-xs-2 correct-tools"> 
                      <span>Действия</span>
                    </div>
                </div>
                



                <?php 
                  if (isset($_POST['forfound']))
                    $forfound = $_POST['forfound'];
                  $findin = new WorkForm();
                  $findin->FindIntoUsers($forfound);
                ?>

                



                      </div>
                    </div>
                  </div>
                </div>
                <script>
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
                </script>
                
              </body>
            </html>