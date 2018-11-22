<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['iduser']))
    header('Location: ../index.php');
  require_once "../php/action.php";
  require_once "../php/setter.php";

  $acces = new WorkForm();
  $acces->ControlAcces(2);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создание группы</title>
    
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
                    <h2 style="padding: 10px 5px 10px 29px;"><i class="fas fa-users"></i>
                     Создание группы</h2>
                    <p style="font-size: 14px;    padding: 10px 5px 10px 29px;">Добавление и редактирование группы пользователей</p>
                    <a href="admin.php" class="before-page"> &larr; Вернуться на главную страницу</a>
                </div>
                    <div class="col-md-6">
                     <div id="add-group" class="new-group">
                            <form method="post"> 
                                <hr>
                                <p> 
                                    <input id="namegroup" name="nameofgroup" required type="text" placeholder="Имя группы" />
                                </p>
                                <hr>
                                <p>
                                    <label>Редактирование и просмотр пользователей</label>
                                    <input id="" name="viewandedit" value="1" type="checkbox" />
                                </p>
                                <hr>
                                <p>
                                    <label>Создать группу</label>
                                    <input id="" name="creategr" value="2" type="checkbox" />
                                </p>
                                <hr>
                                <p>
                                    <label>Заявки</label><br>
                                    <label>Добавление новых заявок</label>
                                    <input id="" name="addreq" value="4" type="checkbox" /><br>
                                    <label>Утверждение заявок (Руководитель)</label>
                                    <input id="" name="acceptreq" value="10" type="checkbox" /><br>
                                    <label>Просмотр и редактирование всех заявок</label>
                                    <input type="radio" id="sp1" name="vieredreq" value="5">
                                    <label>Просмотр и редактирование только своих заявок</label>
                                    <input type="radio" id="sp1"  name="vieredreq" value="6">
                                    <label>Просмотр и редактирование только своих заявок</label>
                                </p>
                                <hr>
                                <p>
                                    <label>Договора</label><br>
                                    <label>Добавление новых договоров</label>
                                    <input id="" name="adddoc" value="8" type="checkbox" /><br>
                                    <label>Просмотр и редактирование договоров</label>
                                    <input id="" name="addreddoc" value="9" type="checkbox" />
                                </p>
                                <hr>

                                <p class="signin button"> 
                         <input type="submit" name="creategroup" class="check-inform" value="Создать" id="createNewGroup"/> 
                        </p>
                              
                               
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
   
</body>
</html>