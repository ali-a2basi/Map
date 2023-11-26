<?php 


function get_user_id(){


    return 1;
}



function is_logged_in(){
    return isset($_SESSION['login']);


}

function logout(){
     unset($_SESSION['login']);


}




function login($username, $password){

    global $admins;


    if(array_key_exists($username,$admins) and 
        password_verify($password,$admins[$username])){


            $_SESSION['login']=1;
            return true;



    }
    return false;


}

