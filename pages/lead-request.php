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
 <?php include "../dynamic/header.php"; ?>  
    <div class="container-fluid">
        <div class="row">
            <?php include "../dynamic/sidebar.php"; ?>
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