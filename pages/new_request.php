<!DOCTYPE html>
<?php
    include "../ini.php";
    session_start();
    // if (!isset($_SESSION['iduser']))
    //   header('Location: ../index.php');
    require_once "../php/action.php";
    require_once "../php/setter.php";

    $acces = new WorkForm();
    $acces->ControlAcces(4);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новая заявка</title>
    
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
                        <h2 style="padding: 10px 5px 10px 29px;"><i class="far fa-list-alt"></i>
                         Добавление заявки</h2>
                        <p style="font-size: 14px;    padding: 10px 5px 10px 29px;">Добавить новую заявку</p>
                        <a href="all_request.php" class="before-page"> &larr; Вернуться на предыдущую страницу</a>
                    </div>
                        <div class="col-md-6">
                         <div id="correct-users" class="center-block">
                                <form method="post" enctype="multipart/form-data"> 
                                    <p> 
                                        <label for="" class="label-for-input" > Заявитель </label>
                                    </p>
                                    <input type="text" disabled="" value="<?php echo $acces->getUserName(); ?>">
                                    <!-- <select name="id_user">
                                        <option value="3">Иванов</option>
                                        <option value="5">Петров</option>
                                        <option value="4">Шевцов</option>
                                    </select> -->
                                    <p> 
                                        <label for="" class="label-for-input" >Тема</label>
                                        <input id="" name="theme" required type="text" placeholder="Тема" />
                                    </p>
                                    <p> 
                                        <label for="" class="label-for-input" >Объект</label>
                                        <input id="" name="object" required type="text" placeholder="Объект" />
                                    </p>
                                    <p> 
                                        <label for="" class="label-for-input" > Валюта </label>
                                    </p>
                                    <select name="currency">
                                        <option value="USD">USD</option>
                                        <option value="UAH">UAH</option>
                                        <option value="RUB">RUB</option>
                                    </select>
                                    <p> 
                                        <label for="" class="label-for-input">Сумма</label>
                                        <input id="" name="sum" required type="number" placeholder="Сумма" />
                                    </p>
                                    <p> 
                                        <label for="" class="label-for-input"> Комментарий</label>
                                        <textarea name="review" id="for-comments"  rows="10" placeholder="Комментарий"></textarea>
                                    </p>
                                    <p> 
                                        <label for="" class="label-for-input" >Загрузить файл</label>
                                        <input id="file_upload" name="uploadfile"  type="file" />
                                    </p>
                                    <p class="signin button"> 
    									<input type="submit" name="createreq" class="check-inform" value="Добавить новую заявку"/> 
    								</p>
                                </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>  
</body>
</html>