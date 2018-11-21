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
    <title>Просмотр и редактирование договоров</title>
    
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
<script src= "../js/all_query.js"></script>
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
               <div class="main-page main-contract">
                <div class="row">
                    <h2 style="padding: 10px 5px 10px 16px;     margin-left: 14px;"><i class="fas fa-eye"></i>
                     Просмотр договоров</h2>
                     </div>
                     <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12  col-xs-12">
                         <form class="search-users">
                              
                              <input type="text" placeholder="Поиск договора" name="findcontrtacts" class="contract-button-show" value="<?php echo $_GET['findcontrtacts']; ?>">
                              <input type="submit" placeholder="Найти" value="Найти" id="find">
                            
                         </form>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 sorts-by">
                            <span class="sort-title">Сортировать по:</span>
                        
                        <div class="sorts">
	                            <button id="sort-by-date"><a href="#">Дата окончания</a>
                                   <a href="?date=ASC"><span class="glyphicon glyphicon-triangle-top up-arrow" aria-hidden="true"></span></a>
                                   <a href="?date=DESC"><span class="glyphicon glyphicon-triangle-bottom down-arrow" aria-hidden="true"></span></a>
                               </button>
                                <button id="sort-by-implementer"><a href="#">Исполнитель</a>
                                   <a href="?ispl=ASC"><span class="glyphicon glyphicon-triangle-top up-arrow" aria-hidden="true"></span></a>
                                   <a href="?ispl=DESC"><span class="glyphicon glyphicon-triangle-bottom down-arrow" aria-hidden="true"></span></a>
                                </button>
                                <button id="sort-by-customer"><a href="#">Заказчик</a>
                                   <a href="?zakz=ASC"><span class="glyphicon glyphicon-triangle-top up-arrow" aria-hidden="true"></span></a>
                                   <a href="?zakz=DESC"><span class="glyphicon glyphicon-triangle-bottom down-arrow" aria-hidden="true"></span></a>
                                </button>
                            </div>
                     </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-xs-12 col-lg-8">
                         <form class="search-contract">
                              
                              <input type="button"  class="contract-button-show" value="Заканчиваются через 7 дней и менее">
                             <input type="submit"  value="Excel" id="find-excel"><br>
                              
                               <input type="button" class="contract-button-show" value="Заканчиваются через 30 дней и менее">
                              <input type="submit"  value="Excel" id="find--show-excel"><br>
                            
                    </form>
                    
                   <a href="all_contract.php" class="before-page"> &larr; Вернуться на предыдущую страницу</a>
                         </div>
                     </div>
                   </div>

                <div class="container-fluid">
                <div class="row users-list hidden-xs hidden-sm">
                    <div class="col-md-2 col-xs-12"> <span>Номер договора</span></div>
                    <div class="col-md-2 col-xs-12"> <span>Дата заключения</span></div>
                    <div class="col-md-2 col-xs-12"> <span>Дата окончания</span></div>
                    <div class="col-md-2 col-xs-12"> <span>Заказчик</span></div>
                    <div class="col-md-2 col-xs-12"> <span>Исполнитель</span></div>
                    <div class="col-md-2 col-xs-12 correct-tools"> 
                       <span>Действия</span>
                    </div>
                </div>
                <?php
                  $acces->showContract();
                ?>
                
                
                <!-- <div class="row users-accept">
                    <div class="col-md-2 col-xs-12"> <span>ID</span></div>
                    <div class="col-md-2 col-xs-12"> <span>Номер договора</span></div>
                    <div class="col-md-2 col-xs-12"> <span>Дата заключения</span></div>
                    <div class="col-md-2 col-xs-12"> <span>Дата окончания</span></div>
                    <div class="col-md-1 col-xs-12"> <span>Статус</span></div>
                    <div class="col-md-1 col-xs-12"> <span>111</span></div>
                     <div class="col-md-2 col-xs-12 correct-tools"> 
                        <div class="watch-tools">
                          <a href="full_contract.php?id=" class="tools-add"><i class="far fa-eye"></i></a>
                        </div>
    
                        <div class="watch-tools">
                          <a href="correct_contract.php?id=" class="tools-correct"><i class="fas fa-pen"></i></a>   
                        </div>
                    </div>
                </div> -->
                      

            </div>
            </div>
        </div>   
    </div>
 
    
</body>
</html>