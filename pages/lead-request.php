<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Утверждение заявки руководителем</title>
    
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
   
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Панель управления</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="img/user.jpg" alt="avatar" width="32px" height="32px"></a></li> 
        <li><a href="#exit" type="button" class="admin-exit">Admin</a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 left-side">
               
               <div class="dropdown">
  <div class="btn btn-default dropdown-toggle" id="dropdownMenu1" aria-haspopup="true" aria-expanded="true"><i class="fas fa-globe-americas"></i>
   Все разделы панели
  </div>
</div>
               
               
               <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-wrench"></i>
    Настройки скрипта
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
               <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-user"></i>
   Пользователи
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
               <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-laptop"></i>
    Управление шаблонами
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
               <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-leaf"></i>
    Утилиты
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
               <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-link"></i>
    Другие разделы
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
                
            </div>
            <div class="col-md-10">
                <div class="row main-page">
                    <h2 style="padding: 10px 5px 10px 29px;"><i class="far fa-eye"></i>
                     Полный просмотр заявки</h2>
                    <a href="accept-request.html" class="before-page"> &larr; Вернуться на предыдущую страницу</a>
                </div>
                    <div class="col-md-6">
                     <div id="correct-users" class="center-block">
                           
                           <div class="table-responsive" style="max-width: 100%; overflow: auto;">
                            <table style="width:100%">
                                  <tr>
                                    <th>ID:</th>
                                    <td>
                                        <label for="" class="label-for-input" > ID </label>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>Заявитель:</th>
                                    <td><label for="" class="label-for-input" > Заявитель </label></td>
                                  </tr>
                                   <tr>
                                    <th>Тема:</th>
                                    <td><label for="" class="label-for-input" > Тема </label></td>
                                  </tr>
                                   <tr>
                                    <th>Объект:</th>
                                    <td><label for="" class="label-for-input" > Объект </label></td>
                                  </tr>
                                   <tr>
                                    <th>Сумма:</th>
                                    <td><label for="" class="label-for-input" > Сумма </label></td>
                                  </tr>
                                   <tr>
                                    <th>Комментарий:</th>
                                    <td><label for="" class="label-for-input" > Комментарий </label></td>
                                  </tr>
                                   <tr>
                                    <th>Файл:</th>
                                    <td><label for="" class="label-for-input" > Файл </label></td>
                                  </tr>
                                   <tr>
                                    <th>Статус:</th>
                                    <td><label for="" class="label-for-input" > Статус </label></td>
                                  </tr>
                                   <tr>
                                    <th>Время:</th>
                                    <td><label for="" class="label-for-input" > Время </label></td>
                                  </tr>
                                   
                                    <tr>
                                        <th>Комментарий от руководителя:</th>
                                        <td>
                                            <textarea name="" id="comment-from-mentor" ></textarea>
                                        </td>
                                  </tr>
                                  <tr>
                                    <th>Действия: </th>
                                    <td> 
                                        <div class="watch-tools">
                                          <button class="request-add"><i class="fas fa-plus"></i></button>
                                        </div>
    
                                        <div class="watch-tools">
                                           <button class="request-cancel"><i class="fas fa-minus"></i></button>   
                                        </div>
                                        <div class="watch-tools">
                                           <button class="request-time"><i class="far fa-clock"></i>
                                           </button>  
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