<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['iduser']) or !isset($_SESSION['login']))
    header('Location: ../index.php');
  require_once "../php/action.php";
  require_once "../php/setter.php";
  $acces = new WorkForm();
  $acces->ControlAcces(9);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Полный просмотр договора</title>
    
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
                     Полный просмотр договора</h2>
                    <a href="watch_contract.php" class="before-page"> &larr; Вернуться на предыдущую страницу</a>
                </div>
                    <div class="col-md-6">
                     <div id="correct-users" class="center-block">
                           <?php
                            $result = $acces->showContractFull($_GET['id']);
                           ?>
                           <div class="table-responsive" style="max-width: 100%; overflow: auto;">
                            <table style="width:100%">
                                  <tr>
                                    <th>Номер договора:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['numberofoder']; ?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Дата заключения договора:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['datastart']; ?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Дата окончания договора:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['dataend']; ?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Заказчик:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['namezakazchik']; ?> </label></td>
                                  </tr>
                                  <tr>
                                    <th>Исполнитель:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['nameispolnitel']; ?> </label></td>
                                  </tr>
                                  <tr>
                                    <th>Статус:</th>
                                    <td><label for="" class="label-for-input" > <?php echo $result['status']; ?> </label></td>
                                  </tr>
                                   <tr>
                                    <th>Прикрепленные файлы:</th>
                                    <td>
                                      <label for="" class="label-for-input" > 
                                        <?php
                                          if(!empty($result['file1oldname']))
                                          {
                                            printf('
                                            <a href="%s">%s</a><br>
                                            ',$result['file1realname'],$result['file1oldname']);
                                          }
                                          if(!empty($result['file2oldname']))
                                          {
                                            printf('
                                            <a href="%s">%s</a><br>
                                            ',$result['file2realname'],$result['file2oldname']);
                                          } 
                                          if(!empty($result['file3oldname']))
                                          {
                                            printf('
                                            <a href="%s">%s</a>
                                            ',$result['file3realname'],$result['file3oldname']);
                                          } 
                                          
                                          // echo "<a href=''>$result['file1oldname']</a><br>";
                                        ?>
                                      </label></td>
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