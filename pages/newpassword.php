<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
    <?php 
        session_start();
        require_once "../php/action.php"; 
    ?>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Восстановление пароля</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="../css/form.css" />
		<link rel="stylesheet" href="../css/animate-custom.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">

            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="tonewpassword"></a>

                    <div id="wrapper">
                                            <div id="newpassword" class="animate form">
                            <form method="post"> 
                                <h3>Восстановление пароля</h3> 
                                <p> 
                                    
                                    <input id="username" name="email" required="required" type="text" placeholder="Email"/>
                                </p>
                                <p> 
                                   
                                    <input id="password" name="newpassword" required="required" type="password" placeholder="Пароль" /> 
                                </p>
                                  <p> 
                                   
                                    <input id="password" name="repeatpassword" required="required" type="password" placeholder="Повторить пароль" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input style="font-size: 14px;" type="submit" name="newpass" value="Отправить пароль" /> 
								</p>
                           
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
      
    </body>
</html>