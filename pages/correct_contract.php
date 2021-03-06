<!DOCTYPE html>
<?php
  session_start();
  require_once "../php/action.php";
  require_once "../php/setter.php";

  $acces = new WorkForm();
  $acces->ControlAcces(9);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>correct_request</title>
    
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
        <!-- <a href="#" class="yes">Да</a> -->
        <!-- <a href="#" class="no">Нет</a> -->
        <form method="post">
          <input type="submit" value="Да" class="yes"  name="exitfromaccout">
          <input type="submit" value="Нет" class="no"  name="">
          
        </form>
      </div>
    </div>
<div class="js"></div>
   
   <?php include "../dynamic/header.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <?php include "../dynamic/sidebar.php"; ?>
            <div class="col-md-10">
                <div class="row main-page">
                    <h2 style="padding: 10px 5px 10px 29px;"><i class="fas fa-check-double"></i>
                     Редактирование договора</h2>
                    <p style="font-size: 14px;    padding: 10px 5px 10px 29px;">Редактировать и сохранить договор</p>
                    <a href="admin.php" class="before-page" style="margin-left: 13px;"> &larr; Вернуться на главную страницу</a>
                </div>
                    <div class="col-md-6">
                     <div id="correct-users" class="center-block">
                            <?php
                                $result = $acces->showContractFull($_GET['id']);
                            ?>
                            <form method="post">
                                <p> 
                                    <label for="" class="label-for-input" >Номер договора</label>
                                    <input id="" name="numberofoder" required type="text" placeholder="Номер договора" value="<?php echo $result['numberofoder']; ?>" />
                                </p>
                                <p> 
                                    <label for="" class="label-for-input" >Дата заключения договора</label>
                                    <input id="" name="datastart" required type="text" placeholder="Дата заключения договора" value="<?php echo $result['datastart']; ?>"/>
                                </p>
                                <p> 
                                    <label for="" class="label-for-input" >Дата окончания договора</label>
                                    <input id="" name="dataend" required type="text" placeholder="Дата окончания договора" value="<?php echo $result['dataend']; ?>"/>
                                </p>
                                <p> 
                                    <label for="" class="label-for-input" >Статус</label>
                                    <select name="status" id="">
                                        <option value="действует" <?php if ($result['status'] == "действует")printf('selected'); ?> >действует</option>
                                        <option value="завершен" <?php if ($result['status'] == "завершен")printf('selected'); ?> >завершен</option>
                                    </select>
                                </p>
                                <p> 
                                    <label for="" class="label-for-input">Заказчик</label>
                                    <input id="" name="namezakazchik" required type="text" placeholder="Заказчик" value="<?php echo $result['namezakazchik']; ?>"/>
                                </p>
                                <p> 
                                    <label for="" class="label-for-input">Исполнитель</label>
                                    <input id="" name="nameispolnitel" required type="text" placeholder="ФИО или название юрлица" value="<?php echo $result['nameispolnitel']; ?>"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="updcontract" class="check-inform" value="Сохранить изменения"/> 
								</p>

                            </form>
                    </div>
                </div>
        </div>
    </div>
</div>  
         
    
    
</body>
</html>