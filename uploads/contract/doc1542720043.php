<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<?php
	include "ini.php";
	session_start();
	if (isset($_SESSION['iduser']) and isset($_SESSION['login']))
		header('Location: pages/admin.php');
	require_once "php/action.php";
	require_once "php/setter.php";
?>
<head>
	<meta charset="UTF-8" />
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
	<title>Авторизация и регистрация пользователей</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/form.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate-custom.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="js/all_query.js"></script>
	<script src="js/script.js"></script>
	<script src="js/common.js"></script>
</head>
<body>

		<!-- <div style="text-align: center" id="popupWin" class="modalwin">
            <div id="test">
               
            </div>
               <a href="#" class="modal-ok">OK</a>
        </div> -->
        
        <!-- <script>showModalWin("gjhgjhghjgh");</script> -->



	<div class="container">
		<section>
			<div id="container_demo" >
				<a class="hiddenanchor" id="toregister"></a>
				<a class="hiddenanchor" id="tologin"></a>
				<a class="hiddenanchor" id="tonewpassword"></a>
				<div id="wrapper">
					<div id="login" class="animate form">
						<form method="post">
							<h3>Войти в личный кабинет</h3>
							<p>
								
								<input id="username" name="login" required="required" type="text" placeholder="Логин"/>
							</p>
							<p>
								
								<input id="password" name="password" required="required" type="password" placeholder="Пароль" />
							</p>
							<p class="keeplogin">
								<input type="checkbox" name="" id="loginkeeping" value="loginkeeping" />
								<label for="loginkeeping">Запомнить меня</label>
							</p>
							<p class="login button">
								<input type="submit" name="autoriz" value="Войти" />
							</p>
							<p class="change_link">
								<a href="#sendEmail" class="to_newpassword">Восстановить</a>
								<a href="#toregister" class="to_register">Регистрация</a>
							</p>
						</form>
					</div>
					
					<div id="sendEmail" class="animate form">
						<form method="post">
							<h3>Восстановить пароль</h3>
							<p>
								
								<input id="useremail" name="resetmail" required="required" type="text" placeholder="Email"/>
								<p class="login button">
								<input type="submit" name="sendmail" value="Восстановить" />
							</p>
							</p>
							
							<p class="change_link">
								<a href="#tologin" class="enterLogin" >Вход</a>
							</p>
							
						</form>
					</div>
					
					<div id="register" class="animate form">
						<form method="post">
							<h1> Регистрация </h1>
							<p>
								<label for="usernamesignup" class="uname" >ФИО</label>
								<input id="usernamesignup" name="name" required="required" type="text" placeholder="ФИО" />
							</p><p>
							<label for="userloginsignup" class="ulogin" >Логин</label>
							<input id="usernamesignup" name="login" required="required" type="text" placeholder="Логин" />
							</p>
							<p>
								<label for="userphones" class="uphone">Ваш телефон</label>
								<input id="usernamesignup" name="phone"  type="text" placeholder="Ваш телефон" />
							</p>
							<p>
								<label for="emailsignup" class="youmail"> Ваш email</label>
								<input id="emailsignup" name="email" required="required" type="email" placeholder="email"/>
							</p>
							<p>
								<label for="passwordsignup" class="youpasswd" > Пароль </label>
								<input id="passwordsignup" name="password" required="required" type="password" placeholder="Пароль"/>
							</p>
							<p class="signin button">
								<input style="font-size: 14px;" name="reg" type="submit" value="Отправить запрос"/>
							</p>
							<p class="change_link">
								Уже зарегистрированы?
								<a href="#tologin"  class="to_register"> Войти</a>
							</p>
						</form>
				</div>
				
			</div>
		</div>
	</section>
</div>
<script type="text/javascript" src="js/all_query.js"></script>
</body>
</html>