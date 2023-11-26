<?php

include "bootstrap/init.php";


if(isset($_GET['logout']) and $_GET['logout'] == 1){
    logout();


}

if($_SERVER['REQUEST_METHOD']=='POST'){

    if(login($_POST['username'],$_POST['password'])){


    }else{

        message_failed("نام کابری یا رمز عبور اشتباه است");
    }


}


if(is_logged_in()){

    include "template/tpl-adm.php";
}else{

    include "template/tpl-adm-auth.php";

}



