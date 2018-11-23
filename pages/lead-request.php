<!DOCTYPE html>
<?php
    session_start();
    require_once "../php/action.php";
    require_once "../php/setter.php";
    $acces = new WorkForm();
    $acces->ControlAcces(10);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Полный просмотр заявки</title>
    
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
                    <h2 style="padding: 10px 5px 10px 29px;"><i class="far fa-eye"></i>
                     Полный просмотр заявки</h2>
                    <a href="accept-request.php" class="before-page"> &larr; Вернуться на предыдущую страницу</a>
                </div>
                    <div class="col-md-6">
                     <div id="correct-users" class="center-block">
                         <?php
                            $result = $acces->showReq($_GET['id']);
                         ?>
                           <div class="table-responsive" style="max-width: 100%; overflow: auto;">
                            <table style="width:100%">
                                  <tr>
                                    <th>Заявитель:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $acces->getUserName(); ?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Тема:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['theme'];?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Объект:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['object'];?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Сумма:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['sum']." ".$result['currency'];?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Комментарий:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['review'];?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Файл:</th>
                                    <td><label for="" class="label-for-input" > <a href="<?php echo $result['savefilename'];?>"><?php echo $result['realfilename'];?></a> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Статус:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['status'];?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Дата:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['date'];?> </label></td>
                                  </tr>

                                      <tr>
                                          <th>Комментарий от руководителя:</th>
                                          <td>
                                              <form action="" method="post">
                                                  <?php
                                                    printf('<textarea name="newreview" id="comment-from-mentor" >%s</textarea>',$result['reviewofhead']);
                                                    if (!empty($result['reviewofhead']))
                                                        printf('<input type="submit" name="updchangereview" value="Изменить">');
                                                    else printf('<input type="submit" name="updchangereview" value="Добавить">');
                                                  ?>
                                              </form>
                                          </td>
                                      </tr>
                                      <tr>
                                          <th>Действия: </th>
                                          <td>
                                              <div class="watch-tools">
                                                  <a href="?id=<?php echo $result['id']?>&acceptreqs=<?php echo $result['id']?>"><button class="request-add"><i class="fas fa-plus"></i></button></a>
                                              </div>
                                              <div class="watch-tools">
                                                  <a href="?id=<?php echo $result['id']?>&cancelreqs=<?php echo $result['id']?>"><button class="request-cancel"><i class="fas fa-minus"></i></button></a>
                                              </div>
                                              <div class="watch-tools">
                                                  <a href="?id=<?php echo $result['id']?>&workagains=<?php echo $result['id']?>"><button class="request-time"><i class="far fa-clock"></i></button></a>
                                              </div>
                                          </td>
                                      </tr>

                                </table>
                           </div>
                           

                    </div>
                </div>
        </div>
    </div>
</div>  
         
    
    
</body>
</html>