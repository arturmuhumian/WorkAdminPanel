<?php
	class WorkForm
    {
        function getUserName()
        {
            $qw = "SELECT name FROM users WHERE id=".$_SESSION['iduser'];
            $result = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
            return $result['name'];

        }
        function FindContract()
        {
            $qw = "SELECT * FROM contracts";
            if (isset($_GET['findcontrtacts'])) {
                $qw = $qw." WHERE numberofoder LIKE '%".$_GET['findcontrtacts']."%' or nameispolnitel LIKE '%".$_GET['findcontrtacts']."%' or datastart LIKE '%".$_GET['findcontrtacts']."%' or dataend LIKE '%".$_GET['findcontrtacts']."%' or namezakazchik LIKE '%".$_GET['findcontrtacts']."%'";
            }
            if (isset($_GET['date']))
            {
                switch ($_GET['date']) {
                    case 'ASC':
                        $qw = $qw." ORDER BY dataend ASC";
                        break;
                    case 'DESC':
                        $qw = $qw." ORDER BY dataend DESC";
                        break;
                }
            }
            if (isset($_GET['ispl']))
            {
                switch ($_GET['ispl']) {
                    case 'ASC':
                        $qw = $qw." ORDER BY nameispolnitel ASC";
                        break;
                    case 'DESC':
                        $qw = $qw." ORDER BY nameispolnitel DESC";
                        break;
                }
            }
            if (isset($_GET['zakz']))
            {
                switch ($_GET['zakz']) {
                    case 'ASC':
                        $qw = $qw." ORDER BY namezakazchik ASC";
                        break;
                    case 'DESC':
                        $qw = $qw." ORDER BY namezakazchik DESC";
                        break;
                }
            }
            // echo $qw;
            return $qw;
        }
        function showContract()
        {
            if (!mysqli_set_charset($this->conn(), "utf8")) {
                printf("Ошибка при загрузке набора символов utf8: %s <br>", mysqli_error($this->conn()));
            }
            else {
                printf("Текущий набор символов: %s <br>", mysqli_character_set_name($this->conn()));
            }
            //mysql_query("SET NAMES 'utf8'");

            $restemp = mysqli_query($this->conn(),$this->FindContract());
            while ($result = mysqli_fetch_array($restemp)){
                printf('
                    <div class="row users-accept">
                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                         <div class="col-md-2 col-xs-12 correct-tools"> 
                            <div class="watch-tools">
                              <a href="full_contract.php?id=%s" class="tools-add"><i class="far fa-eye"></i></a>
                            </div>
        
                            <div class="watch-tools">
                              <a href="correct_contract.php?id=%s" class="tools-correct"><i class="fas fa-pen"></i></a>   
                            </div>
                        </div>
                    </div>
                    ',$result['numberofoder'],$result['datastart'],$result['dataend'],$result['namezakazchik'],$result['nameispolnitel'],$result['id'],$result['id']);
            }
        }
        function enterTableReq($swiths)
        {
            //опеределение своих записей
            $getgroup = "SELECT id_group FROM users WHERE id=".$_SESSION['iduser'];
            $idgroup = mysqli_fetch_array(mysqli_query($this->conn(),$getgroup));

            $fn = "SELECT id_modul FROM sections WHERE id_group=".$idgroup['id_group']." and id_modul=5 or id_modul=6";
            $ressw = mysqli_fetch_array(mysqli_query($this->conn(),$fn));


            switch ($ressw['id_modul']) {
                case 5: echo "all";
                        // получаем имя автора по ИД
                        if($swiths == 1)
                        {
                            $qw = "SELECT * FROM requests";
                            $restemp = mysqli_query($this->conn(),$qw);
                            while ($res = mysqli_fetch_array($restemp))
                            { 
                                $findname = "SELECT name FROM users WHERE id=".$res['id_owner'];
                                $resuser = mysqli_fetch_array(mysqli_query($this->conn(),$findname));

                                printf('
                                <div class="row users-accept">
                                    <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                    <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                    <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                    <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                    <div class="col-md-1 col-xs-12"> <span>%s</span></div>
                                    <div class="col-md-1 col-xs-12"> <span>%s</span></div>
                                    <div class="col-md-2 col-xs-12 correct-tools"> 
                                        <div class="tools">
                                              <a href="full_request.php?idredactreq=%s" class="tools-add"><i class="far fa-eye"></i></a>
                                        </div>
                    
                                         <div class="tools">
                                               <a href="correct_request.php?idredactreq=%s" class="tools-correct"><i class="fas fa-pen"></i></a>   
                                            </div>
                                    </div>
                                </div>
                                ',$resuser['name'],$res['theme'],$res['object'],$res['sum'],$res['status'],$res['date'],$res['id'],$res['id']);
                            }
                        }
                        if ($swiths == 2) 
                        {
                            $qw = "SELECT * FROM requests WHERE id=".$_GET['idredactreq'];;
                            $restemp = mysqli_query($this->conn(),$qw);
                            while ($res = mysqli_fetch_array($restemp))
                            {
                                $findname = "SELECT name FROM users WHERE id=".$res['id_owner'];
                                $resuser = mysqli_fetch_array(mysqli_query($this->conn(),$findname));
                                printf('
                                      <tr>
                                        <th>ID:</th>
                                        <td>
                                            <label for="" class="label-for-input" > %s </label>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>Заявитель:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Тема:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Объект:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Сумма:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Комментарий:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Файл:</th>
                                        <td><label for="" class="label-for-input" > <a href="%s">%s</a> </label></td>
                                      </tr>
                                       <tr>
                                        <th>Статус:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Дата:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                            ',$res['id'],$resuser['name'],$res['theme'],$res['object'],$res['sum'],$res['review'],$res['savefilename'],$res['realfilename'],$res['status'],$res['date']);
                            }  
                        }
                    break;
                case 6: echo "yourself"; 
                        if($swiths == 1)
                        {
                            $qw = "SELECT * FROM requests WHERE id_owner=".$_SESSION['iduser'];
                            $restemp = mysqli_query($this->conn(),$qw);
                            while ($res = mysqli_fetch_array($restemp))
                            { 
                                $findname = "SELECT name FROM users WHERE id=".$res['id_owner'];
                                $resuser = mysqli_fetch_array(mysqli_query($this->conn(),$findname));

                                    printf('
                                    <div class="row users-accept">
                                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                        <div class="col-md-2 col-xs-12"> <span>%s</span></div>
                                        <div class="col-md-1 col-xs-12"> <span>%s</span></div>
                                        <div class="col-md-1 col-xs-12"> <span>%s</span></div>
                                        <div class="col-md-2 col-xs-12 correct-tools"> 
                                            <div class="tools">
                                                  <a href="full_request.php?idredactreq=%s" class="tools-add"><i class="far fa-eye"></i></a>
                                            </div>
                        
                                             <div class="tools">
                                                   <a href="correct_request.php?idredactreq=%s" class="tools-correct"><i class="fas fa-pen"></i></a>   
                                                </div>
                                        </div>
                                    </div>
                                    ',$resuser['name'],$res['theme'],$res['object'],$res['sum'],$res['status'],$res['date'],$res['id'],$res['id']);
                            }
                        }
                        if ($swiths == 2) 
                        {
                            $qw = "SELECT * FROM requests WHERE id_owner=".$_SESSION['iduser']." and id=".$_GET['idredactreq'];
                            $restemp = mysqli_query($this->conn(),$qw);
                            while ($res = mysqli_fetch_array($restemp))
                            { 
                                $findname = "SELECT name FROM users WHERE id=".$res['id_owner'];
                                $resuser = mysqli_fetch_array(mysqli_query($this->conn(),$findname));
                                printf('
                                      <tr>
                                        <th>ID:</th>
                                        <td>
                                            <label for="" class="label-for-input" > %s </label>
                                        </td>
                                      </tr>
                                      <tr>
                                        <th>Заявитель:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Тема:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Объект:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Сумма:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Комментарий:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Файл:</th>
                                        <td><label for="" class="label-for-input" > <a href="../%s">%s</a> </label></td>
                                      </tr>
                                       <tr>
                                        <th>Статус:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                                       <tr>
                                        <th>Дата:</th>
                                        <td><label for="" class="label-for-input" > %s </label></td>
                                      </tr>
                            ',$res['id'],$resuser['name'],$res['theme'],$res['object'],$res['sum'],$res['review'],$res['savefilename'],$res['realfilename'],$res['status'],$res['date']);
                            }
                        }
                    break;
            }            
        }
        function createReq($id_user, $theme, $object, $currency, $sum, $review,$file)
        {
            if (!empty($file)) {
                $oldname= $_FILES['uploadfile']['name'];
                $newname= "../uploads/requests/"."doc".time().".".pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION);
            }

            $date = date("Y-m-d");
            $qw = "INSERT INTO requests VALUES (NULL, '$id_user', '$theme', '$object', '$sum', '$currency', '$review', 'новая', '$date','$oldname','$newname');";
            // echo "<br>".$qw;
            
            if (mysqli_query($this->conn(),$qw)) {
                if (!empty($file)) {
                    copy($_FILES['uploadfile']['tmp_name'],$newname);
                    echo "doc-";
                }
                echo "add";
            }
            else echo "<br>"."not add";
        }
        function NewOrder($numberofoder,$datastart,$dataend,$namezakazchik,$nameispolnitel,$filenm1,$filenm2,$filenm3)
        {
            if (!empty($filenm1) and !empty($_FILES['filenm1']['name'])) {
                $oldname1= $_FILES['filenm1']['name'];
                $newname1= "../uploads/contract/"."doc".time().rand(0, 99).".".pathinfo($_FILES['filenm1']['name'], PATHINFO_EXTENSION);
            }
            else
            {
                $oldname1="";
                $newname1="";
            }
            echo count($filenm2 );
            if (!empty($filenm2) and !empty($_FILES['filenm2']['name'])) {
                $oldname2= $_FILES['filenm2']['name'];
                $newname2= "../uploads/contract/"."doc".time().rand(100, 999).".".pathinfo($_FILES['filenm2']['name'], PATHINFO_EXTENSION);
            }
            else
            {
                $oldname2="";
                $newname2="";
            }
            if (!empty($filenm3) and !empty($_FILES['filenm3']['name'])) {
                $oldname3= $_FILES['filenm3']['name'];
                $newname3= "../uploads/contract/"."doc".time().rand(1000, 9999).".".pathinfo($_FILES['filenm3']['name'], PATHINFO_EXTENSION);
                copy($_FILES['filenm3']['tmp_name'],$newname);
            }
            else
            {
                $oldname3="";
                $newname3="";
            }
            $qw = "INSERT INTO contracts VALUES( NULL,'$numberofoder','$datastart','$dataend','$namezakazchik','$nameispolnitel','$oldname1','$newname1','$oldname2','$newname2','$oldname3','$newname3','действует')";
            if (mysqli_query($this->conn(),$qw)) {
                if (!empty($filenm1))
                    copy($_FILES['filenm1']['tmp_name'],$newname1);
                if (!empty($filenm2))
                    copy($_FILES['filenm2']['tmp_name'],$newname2);
                if (!empty($filenm3))
                    copy($_FILES['filenm3']['tmp_name'],$newname3);
            }
            else echo "Некорректный ввод дат";
            
        }
        function reWruteContract()
        {

        }

        function reWriteRq($idreq, $theme,$object,$currency,$sum,$review,$status)
        {
            $date = date("Y-m-d");
            $qw = "SELECT * FROM requests WHERE id=$idreq";
            $resbefore = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
            if ($resbefore['theme'] != $theme) {
                $task = "INSERT INTO storyofchange VALUES (NULL,'".$_SESSION['iduser']."', '$idreq','theme','$theme','$date')";
                echo $task."<br>";
                if(mysqli_query($this->conn(),$task))
                {
                    echo "OK"."<br>";
                }
                else echo "NO";
            }
            if ($resbefore['object'] != $object) {
                $task = "INSERT INTO storyofchange VALUES (NULL,'".$_SESSION['iduser']."', '$idreq','object','$object','$date')";
                echo $task."<br>";
                if(mysqli_query($this->conn(),$task))
                {
                    echo "OK"."<br>";
                }
                else echo "NO";
            }
            if ($resbefore['currency'] != $currency) {
                $task = "INSERT INTO storyofchange VALUES (NULL,'".$_SESSION['iduser']."', '$idreq','currency','$currency','$date')";
                echo $task."<br>";
                if(mysqli_query($this->conn(),$task))
                {
                    echo "OK"."<br>";
                }
                else echo "NO";
            }
            if ($resbefore['sum'] != $sum) {
                $task = "INSERT INTO storyofchange VALUES (NULL,'".$_SESSION['iduser']."', '$idreq','sum','$sum','$date')";
                echo $task."<br>";
                if(mysqli_query($this->conn(),$task))
                {
                    echo "OK"."<br>";
                }
                else echo "NO";
            }
            if ($resbefore['review'] != $review) {
                $task = "INSERT INTO storyofchange VALUES (NULL,'".$_SESSION['iduser']."', '$idreq','review','$review','$date')";
                echo $task."<br>";
                if(mysqli_query($this->conn(),$task))
                {
                    echo "OK"."<br>";
                }
                else echo "NO";
            }
            if ($resbefore['status'] != $status) {
                $task = "INSERT INTO storyofchange VALUES (NULL,'".$_SESSION['iduser']."', '$idreq','status','$status','$date')";
                echo $task."<br>";
                if(mysqli_query($this->conn(),$task))
                {
                    echo "OK"."<br>";
                }
                else echo "NO";
            }

            $qw = "UPDATE requests SET theme='$theme', object='$object', sum='$sum', currency='$currency', review='$review',status='$status' WHERE id=$idreq";
            if (mysqli_query($this->conn(),$qw)) {
                echo "updated";
            }
        }

        function showReq($id)
        {
            $qw = "SELECT * FROM requests WHERE id=$id";
            $res = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
            return $res;
        }
        function showContractFull($id)
        {
            $qw = "SELECT * FROM contracts WHERE id=$id";
            $res = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
            return $res;
        }

        function ControlAcces($idmod)
        {
            if (isset($_SESSION['iduser']) and isset($_SESSION['login'])) {
                $qw = "SELECT id_group FROM users WHERE id=".$_SESSION['iduser'];
                $idgr = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
                $newqw = "SELECT id_modul FROM sections WHERE id_group=".$idgr['id_group'];
                $tempres = mysqli_query($this->conn(),$newqw);
                while ($res = mysqli_fetch_array($tempres)) {
                    if ($res['id_modul'] == $idmod or $idmod == 56)
                    {
                        return true;
                    }
                }
                if (!isset($_SESSION['SUPER_USER']))
                {
                    header('Location: admin.php');
                }
            }
            else 
            {

                // echo "<script type='text/javascript'>window.location.assign('admin.php');</script>";
                header('Location: ../index.php');
            }
        }
        function UpdStatus($act, $id,$login)
        {
            switch ($act) {
                case 'delete': $qw = "DELETE FROM users WHERE id='$id'";
                    if(mysqli_query($this->conn(),$qw))
                        $delblack = "DELETE FROM blacklist WHERE login='$login'";
                        mysqli_query($this->conn(),$delblack);
                        echo "Пользователь удален";
                    break;
                case 'accept': $qw = "UPDATE users SET status=1 WHERE id='$id'";
                $qws = "DELETE FROM blacklist WHERE login='$login'";
                echo $qws;
                    if(mysqli_query($this->conn(),$qw) and mysqli_query($this->conn(),$qws))
                        echo "Пользователь активирован";
                    break;
                case "block": $qw = "UPDATE users SET status=2 WHERE id='$id'";
                    $checkhavelog = "SELECT login FROM blacklist WHERE login='$login'";
                    $qws = "INSERT INTO blacklist VALUES(NULL , '$login')";

                    // echo "=>".$_GET['login']."<br>";

                    $fornext = mysqli_fetch_array(mysqli_query($this->conn(),$checkhavelog));

                    if (empty($fornext)) {
                        if(mysqli_query($this->conn(),$qw) and mysqli_query($this->conn(),$qws))
                        {
                            echo "Пользователь заблокирован";
                        }
                        
                    }
                    else 
                        echo "Пользователь ранее был заблокирован";
                    break;
            }
            // header('Location: accept.php');
        }
        function CRgroup($name, $one, $two,$four,$fivesix,$eight,$nine)
        {
            //проверка на существование группы
            $testbd = "SELECT name FROM groups WHERE name='$name'";
            // echo $testbd."<br>";
            if (!mysqli_fetch_array(mysqli_query($this->conn(),$testbd))) {
                $qw = "INSERT INTO groups VALUES(NULL, '$name')";
                if (mysqli_query($this->conn(),$qw)) {
                    $newqw = "SELECT id FROM groups WHERE name='$name'";
                    $result = mysqli_fetch_array(mysqli_query($this->conn(),$newqw));
                    
                    if (isset($one)) {
                        $qw = "INSERT INTO sections VALUES (NULL,".$result['id'].",$one)";
                        echo $qw."<br>";
                        if (mysqli_query($this->conn(),$qw)) {
                            echo "Добавлено 1";
                        }
                    }
                    if (isset($two)) {
                        $qw = "INSERT INTO sections VALUES (NULL,".$result['id'].",$two)";
                        echo $qw."<br>";
                        if (mysqli_query($this->conn(),$qw)) {
                            echo "Добавлено 2";
                        }
                    }
                    if (isset($four)) {
                        $qw = "INSERT INTO sections VALUES (NULL,".$result['id'].",$four)";
                        echo $qw."<br>";
                        if (mysqli_query($this->conn(),$qw)) {
                            echo "Добавлено 4";
                        }
                    }
                    if (isset($fivesix)) {
                        $qw = "INSERT INTO sections VALUES (NULL,".$result['id'].",$fivesix)";
                        echo $qw."<br>";
                        if (mysqli_query($this->conn(),$qw)) {
                            echo "Добавлено ".$fivesix;
                        }
                    }


                    if (isset($eight) or isset($nine)) {
                        $qw = "INSERT INTO sections VALUES (NULL,".$result['id'].",7)";
                        echo $qw."<br>";
                        if (mysqli_query($this->conn(),$qw)) {
                            // echo "Добавлено ".$fivesix;
                            if (isset($eight)) {
                                $qw = "INSERT INTO sections VALUES (NULL,".$result['id'].",$eight)";
                                echo $qw."<br>";
                                if (mysqli_query($this->conn(),$qw)) {
                                    echo "Добавлено ".$eight;
                                }
                            }
                            if (isset($nine)) {
                                $qw = "INSERT INTO sections VALUES (NULL,".$result['id'].",$nine)";
                                echo $qw."<br>";
                                if (mysqli_query($this->conn(),$qw)) {
                                    echo "Добавлено ".$nine;
                                }
                            }
                        }
                    }
                }
            }
            else
            {
                echo "Уже существует группа с таким именем";
            } 
        }

    	function ShowFormForEditing($iduser)
    	{
    		$qw = "SELECT name , login , email , phone , id_level, id_group FROM users WHERE id=$iduser";
            $result = mysqli_fetch_array(mysqli_query($this->conn(),$qw));

            //вывод формы с заполнеными полями
            $qw = "SELECT * FROM level";
            $qwe = mysqli_query($this->conn(),$qw);

            $qw_gr = "SELECT * FROM groups";
            $gres= mysqli_query($this->conn(),$qw_gr);

            printf('
            	<form method="post">
                    <p>
                      <label for="" class="label-for-input" >ФИО</label>
                      <input id="" name="name" required type="text" placeholder="ФИО" value="%s"/>
                    </p><p>
                    <label for="" class="label-for-input" >Логин</label>
                    <input id="" name="login" required type="text" placeholder="Логин" value="%s"/>
                  </p>
                  <p>
                    <label for="" class="label-for-input">Телефон</label>
                    <input id="" name="phone" required type="text" placeholder="Телефон" value="%s"/>
                  </p>
                  <p>
                    <label for="" class="label-for-input"> Email</label>
                    <input id="" name="email"required  type="email" placeholder="email" value="%s"/>
                  </p>
                  <p>
                    <label for="" class="label-for-input" > Пароль </label>
                    <input id="" name="newpassword"  type="password" placeholder="Пароль"/>
                  </p>
                  <p>
                    <label for="" class="label-for-input" > ID-level </label>
                  </p>
                <select name="id_level">
                ',$result['name'],$result['login'],$result['phone'],$result['email']);

            while ($res = mysqli_fetch_array($qwe)) {
            	if($res['id'] == $result['id_level'])
            		$sel = "selected";
            	else $sel = "";
            	printf('<option value="%s" %s>%s</option>',$res['id'],$sel,$res['level']);
            }
            printf('</select>
                <p>
                    <label for="" class="label-for-input" > Группа </label>
                  </p>
                <select name="id_group">');

            while ($res = mysqli_fetch_array($gres)) {
                if($res['id'] == $result['id_group'])
                    $sel = "selected";
                else $sel = "";
                printf('<option value="%s" %s>%s</option>',$res['id'],$sel,$res['name']);
            }

            printf('</select>
                  <p class="signin button">
                    <input type="submit" name="upd_val" class="check-inform" value="Изменить данные"/>
                  </p>
                  <a href="../pages/accept.php" class="linkmain-page"> &larr; Вернуться обратно</a>
                  
                </form>
            	');
    	}
        function UPDcontr($id,$numberofoder,$datastart,$dataend,$status,$namezakazchik,$nameispolnitel)
        {
            $qw = "UPDATE contracts SET numberofoder='$numberofoder',datastart='$datastart',dataend='$dataend',status='$status',namezakazchik='$namezakazchik',nameispolnitel='$nameispolnitel' WHERE id='$id'";
            if (mysqli_query($this->conn(),$qw)) {
                echo "Данные успешно изменены";
            }
            else echo "Что-то пошло не так";
        }

    	function UpdateValues($iduser,$name,$login,$email,$phone,$id_level,$id_group,$newpassword)
    	{
    		// echo $name."-".$login."-".$email."-".$phone."-".$id_level."-".$newpassword;	
    		$qw = "UPDATE users SET name='$name', login='$login', email='$email', phone='$phone',id_level=$id_level,id_group=$id_group";
    		if (!empty($newpassword) or $newpassword = '') {
    			$qw = $qw.", password='".password_hash($newpassword,PASSWORD_DEFAULT)."'";
    		}
    		else $qw = $qw." WHERE id='$iduser'";
    		// echo "<br>".$qw."<br>";
    		if (mysqli_query($this->conn(),$qw)) {
    			echo "Данные успешно изменены";
    		}
    		else echo "Что-то пошло не так";
    	}
        function GetColor($idcolor)
        {
            switch ($idcolor) {
                case 0:
                    return "red";
                    break;
                case 1:
                    return "green";
                    break;
                case 2:
                    return "black";
                    break;
            }
        }

    	function FindIntoUsers($forfound)
    	{
            if (empty($forfound))
                $qw = "SELECT id , name , login , email , phone , status FROM users";
            else $qw = "SELECT id , name , login , email , phone , status FROM users WHERE id LIKE '$forfound' or name LIKE '%".$forfound."%' or login LIKE '%".$forfound."%' or email LIKE '%".$forfound."%' or phone LIKE '%".$forfound."%'";

            // echo "qw=".$qw."<br>";
        	
    		$result = mysqli_query($this->conn(),$qw);
    		while ($res = mysqli_fetch_array($result)) {
                $color = $this->GetColor($res['status']);
                printf('
                    <div class="row users-accept">
                         <div class="col-md-2 col-xs-12"> <label for="username">%s</label></div>
                         <div class="col-md-2 col-xs-12"> <label for="username">%s</label></div>
                         <div class="col-md-2 col-xs-12"> <label for="username">%s</label></div>
                         <div class="col-md-2 col-xs-12"> <label for="username">%s</label></div>
                         <div class="col-md-2 col-xs-12"> <label for="username">%s</label></div>

                         <div class="col-md-2 col-xs-12 correct-tools"> 
                               <div class="tools">
                               <a href="?act=accept&id=%s&login=%s" class="tools-add"><i class="fas fa-plus"></i></a></div>
                                <div class="tools">
                                 
                                    <a href="?act=delete&id=%s&login=%s" class="tools-cancel"><i class="fas fa-minus"></i></a></div>
                                <div class="tools">
                                  
                                    <a href="?act=block&id=%s&login=%s" class="tools-block"><i class="fas fa-times"></i></a></div>
                                <div class="tools">
                                  
                                    <a href="users.php?id=%s" class="tools-correct"><i class="fas fa-pen"></i></a></div>
                                <div class=" tools">
                                  
                                    <a href="#" class="tools-status"><span class="glyphicon glyphicon-record %s" aria-hidden="true"></span></a></div>
                            </div>
                        </div>
                        ',$res['id'],$res['name'],$res['login'],$res['email'],$res['phone'],$res['id'],$res['login'],$res['id'],$res['login'],$res['id'],$res['login'],$res['id'],$color);
    		}
    	}
    	function UpdatePassword($email,$newpassword,$repeatpassword)
        {
            $qw = "SELECT reseting FROM users WHERE reseting=1 and email='$email'";
            $result = mysqli_fetch_array(mysqli_query($this->conn(),$qw));

            if ($repeatpassword == $newpassword and $result != NULL)
            {
                $newpassword = password_hash($newpassword,PASSWORD_DEFAULT);
                $qw = "UPDATE users SET password='$newpassword',reseting=0 WHERE email='$email'";
                if (mysqli_query($this->conn(),$qw)) {
                	echo "Пароль изменен";
                    header('Location: ../index.php');
                }
            }
            else
            {
            	echo "Неправильный email или пароли не совпадают";
            }
        }

    	function SendResetPassword($email)
    	{
    		$qw = "SELECT email FROM users WHERE email='$email'";
    		$result = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
    		if ($result) {
    			$link = $_SERVER[HTTP_HOST]."/pages/newpassword.php";
    			$message = "Для сброса пароля перейдите по ссылке: ".$link;
    			$qw = "UPDATE users SET reseting=1 WHERE email='$email'";
                if (mail($email,"Сброс пароля",$message) and mysqli_query($this->conn(),$qw)) {
                	echo "На Ваш email отправлена ссылка сброса пароля";
                }
    		}
    		else
    		{
    			echo "Email не найден";
    		}
    	}
    	function Registration($name, $login, $phone, $email, $password)
        {
            $qw = "SELECT email, login FROM users WHERE email='$email' or login='$login'";
            $result = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
            if($result == 0)
            {
                $qw = "INSERT INTO users VALUE (NULL,'$name','$login','".password_hash($password, PASSWORD_DEFAULT)."','$email','$phone',2,0,0)";
                if (mysqli_query($this->conn(),$qw)) {
                	echo "Ваш запрос на рассмотрении";
                }
            }
            else echo "Такой логин или email уже существует";
        }

    	function Autorization($login,$password)
        {
            
            $qw = "SELECT password, id FROM users WHERE login='$login'";
            $result = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
			
			//проверка черного списка
			$qw = "SELECT login FROM blacklist WHERE login='$login'";            
            $dopres = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
            if(password_verify($password,$result['password']))
            {
            	if ($dopres == NULL) {
            		$_SESSION['iduser'] = $result['id'];
                    $_SESSION['login'] = $login;

                    //опеределение супер пользователя
                    $test = require_once "configurate.php";
                    var_dump($test);
                    foreach ($test as $key => $value) {
                        if ($value == $result['id']) {
                            $_SESSION['SUPER_USER'] = $value; 
                        }
                    }
                    header('Location: pages/admin.php');
            	}
            	else 
                {
                    // echo '<script type="text/javascript">alert("Пользователь заблокирован");</script>';
                    echo "Пользователь заблокирован";
                }
            }
            else
            {
                // echo '<script type="text/javascript">alert("Неправильный логин или пароль");</script>';
                echo "Неправильный логин или пароль";
            }
        }
        function availableModules($req)
        {
            $qw = "SELECT id_group FROM users WHERE id='".$_SESSION['iduser']."'";
            $dopres = mysqli_fetch_array(mysqli_query($this->conn(),$qw));
            $qw = "SELECT id_modul FROM sections WHERE id_group=".$dopres['id_group'];
            $try = mysqli_query($this->conn(),$qw);

            $c = 0;
            while ($res = mysqli_fetch_array($try)) {
                // echo $res['id_modul'];
                if($res['id_modul']==4 or $res['id_modul'] == 5 or $res['id_modul'] == 6)
                {
                    if ($c<1) {
                        include '../modules/mod3.php';
                        $c++;
                    }
                }
                else if ($res['id_modul'] !=4 and $res['id_modul'] !=5 and $res['id_modul'] != 6) {
                    include '../modules/mod'.$res['id_modul'].".php";
                }
            }
        }
    	function conn()
        {
            //$link = mysqli_connect('localhost', 'root', 'root', 'panelplatform') or die("Ошибка " . mysqli_error($this->link));
            $link = mysqli_connect('neopeace.mysql.tools', 'neopeace_plpanel', '40Z%yCd!h7', 'neopeace_plpanel') or die("Ошибка " . mysqli_error($this->link));
            return $link;
        }
    }
?>