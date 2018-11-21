<!DOCTYPE html>
<?php
  include "../ini.php";
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
    <title>Редактирование заявки</title>
    
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
   <?php include "../dynamic/header.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <?php include "../dynamic/sidebar.php"; ?>
            <div class="col-md-10">
                <div class="row main-page">
                    <h2 style="padding: 10px 5px 10px 29px;"><i class="fas fa-check-double"></i>
                     Редактирование заявки</h2>
                    <p style="font-size: 14px;    padding: 10px 5px 10px 29px;">Редактировать и сохранить заявку</p>
                    <a href="admin.php" class="before-page"> &larr; Вернуться на главную страницу</a>
                </div>
                    <div class="col-md-6">
                      <div id="correct-users" class="center-block">
                        <?php
                          if (isset($_GET['idredactreq'])) {
                              $editreq = new WorkForm();
                              $result = $editreq->showReq($_GET['idredactreq']);
                          }
                        ?>
                        <form method="post"> 
                                <p> 
                                    <label for="" class="label-for-input" > Заявитель </label>
                                </p>
                                <select disabled>
                                    <option value=""><?php echo $editreq->getUserName(); ?></option>
                                </select>
                                <p> 
                                    <label for="" class="label-for-input" >Тема</label>
                                    <input id="" name="theme" required type="text" placeholder="Тема" value="<?php echo $result['theme']; ?>"/>
                                </p>
                                <p> 
                                    <label for="" class="label-for-input" >Объект</label>
                                    <input id="" name="object" required type="text" placeholder="Объект" value="<?php echo $result['object']; ?>"/>
                                </p>
                                <p> 
                                    <label for="" class="label-for-input" > Валюта </label>
                                </p>
                                <select name="currency">
                                    <option <?php if($result['currency'] == "UAH")printf('selected'); ?> value="UAH">UAH</option>
                                    <option <?php if($result['currency'] == "USD")printf('selected'); ?> value="USD">USD</option>
                                    <option  <?php if($result['currency'] == "EUR")printf('selected'); ?>value="EUR">EUR</option>
                                </select>
                                <label for="" class="label-for-input">Статус</label>
                                <select name="status">
                                    <option <?php if($result['status'] == "новая")printf('selected'); ?> value="новая">новая</option>
                                    <option <?php if($result['status'] == "в работе")printf('selected'); ?> value="в работе">в работе</option>
                                    <option <?php if($result['status'] == "нуждается в подтверждении")printf('selected'); ?> value="нуждается в подтверждении">нуждается в подтверждении</option>
                                    <option <?php if($result['status'] == "выполнена")printf('selected'); ?> value="выполнена">выполнена</option>
                                    <option <?php if($result['status'] == "не выполнена")printf('selected'); ?> value="не выполнена">не выполнена</option>
                                </select>
                                <p> 
                                    <label for="" class="label-for-input">Сумма</label>
                                    <input id="" name="sum" required type="number" placeholder="Сумма" value="<?php echo $result['sum']; ?>"/>
                                </p>
                                <p> 
                                    <label for="" class="label-for-input"> Комментарий</label>
                                    <textarea name="review" required id="for-comments"  rows="10" placeholder="Комментарий"><?php echo $result['review']; ?></textarea>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" class="check-inform" name="reWriteReq" value="Сохранить изменения"/> 
                                </p>
                            </form>
                      </div>
                </div>
        </div>
    </div>
</div>  
</body>
</html>