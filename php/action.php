<?php
    require_once "setter.php";
        if (isset($_POST['autoriz']))
        {
            $in = new WorkForm();
            $in->Autorization($_POST['login'],$_POST['password']);
        }
        if (isset($_POST['reg']))
        {
            $create = new WorkForm();
            $create->Registration($_POST['name'],$_POST['login'],$_POST['phone'],$_POST['email'],$_POST['password']);
        }
        if (isset($_POST['sendmail']))
        {
            $snd = new WorkForm();
            $snd->SendResetPassword($_POST['resetmail']);
        }
        if (isset($_POST['newpass'])) {
            $reseting = new WorkForm();
            $reseting->UpdatePassword($_POST['email'],$_POST['newpassword'],$_POST['repeatpassword']);
        }
        if (isset($_POST['exitfromaccout'])) {
            echo "string";
            session_destroy();
            unset($_SESSION['iduser']);
            unset($_SESSION['login']);
            unset($_SESSION['SUPER_USER']);
            header('Location: ../index.php');
        }
        if (isset($_POST['upd_val'])) {
            $upd = new WorkForm();
            $upd->UpdateValues($_GET['id'],$_POST['name'],$_POST['login'],$_POST['email'],$_POST['phone'],$_POST['id_level'],$_POST['id_group'],$_POST['newpassword']);
        }
        if (isset($_GET['act']) and isset($_GET['id'])) {
            $change = new WorkForm();
            $change->UpdStatus($_GET['act'],$_GET['id'],$_GET['login']);
        }
        if (isset($_POST['creategroup'])) {
            $cr = new WorkForm();
            $cr->CRgroup($_POST['nameofgroup'],$_POST['viewandedit'],$_POST['creategr'],$_POST['addreq'],$_POST['vieredreq'],$_POST['adddoc'],$_POST['addreddoc'],$_POST['acceptreq']);
        }
        if (isset($_POST['createreq'])) {
            if (isset($idus)) {
                $idus = $_POST['id_user'];
            }
            else{
                $idus = $_SESSION['iduser'];
            }
            $req = new WorkForm();
            $req->createReq($idus,$_POST['theme'],$_POST['object'],$_POST['currency'],$_POST['sum'],$_POST['review'],$_FILES['uploadfile']);
        }
        if (isset($_POST['reWriteReq'])) {
            $reWriteReq = new WorkForm();
            $reWriteReq->reWriteRq($_GET['idredactreq'],$_POST['theme'],$_POST['object'],$_POST['currency'],$_POST['sum'],$_POST['review'],$_POST['status']);
        }
        if (isset($_POST['neworder'])) {
            $neword = new WorkForm();
            $neword->NewOrder($_POST['numberofoder'],$_POST['datastart'],$_POST['dataend'],$_POST['namezakazchik'],$_POST['nameispolnitel'],$_FILES['filenm1'],$_FILES['filenm2'],$_FILES['filenm3']);
        }
        if (isset($_POST['updcontract'])) {
            $updcontr = new WorkForm();
            $updcontr->UPDcontr($_GET['id'], $_POST['numberofoder'], $_POST['datastart'], $_POST['dataend'], $_POST['status'], $_POST['namezakazchik'], $_POST['nameispolnitel']);
        }


        if (isset($_GET['acceptreqs']))
        {
            $bd = new WorkForm();
            $qw = "UPDATE requests SET status='выполнена' WHERE id=".$_GET['acceptreqs'];
            if (mysqli_query($bd->conn(),$qw))
                echo "";
        }
        if (isset($_GET['cancelreqs']))
        {
            $bd = new WorkForm();
            $qw = "UPDATE requests SET status='отклонена' WHERE id=".$_GET['cancelreqs'];
            if (mysqli_query($bd->conn(),$qw))
                echo "";
        }
        if (isset($_GET['workagains']))
        {
            $bd = new WorkForm();
            $qw = "UPDATE requests SET status='возвращена на доработку' WHERE id=".$_GET['workagains'];
            if (mysqli_query($bd->conn(),$qw))
                echo "возвращена на доработку";
        }
        if (isset($_POST['updchangereview']))
        {
            $newriew = $_POST['newreview'];
            $bd = new WorkForm();
            $qw = "UPDATE requests SET reviewofhead='$newriew' WHERE id=".$_GET['id'];
            if (mysqli_query($bd->conn(),$qw))
                echo "";
        }
?>