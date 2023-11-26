<?php defined("base_path") OR die("Permission Denied");

// checking for ajax request before sending


function is_ajax_request(){


    if( !(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest')){

        return false;
    }
    return true;
}



function die_page($msg){

    echo $msg;
    die();
}




function site_url($uri = null){


    echo base_url."{$uri}";
}



function message_successfully($text, $cssClass = 'info'){
    echo "<div class = '$cssClass' style='padding: 30px; width: 80%; margin: 50px auto; background: #9db99c; border: 1px solid #cca4a4; color: #090f08; border-radius: 5px; font-family: sans-serif;text-align:center;'>$text</div>";;
    
}


function message_failed($text, $cssClass = 'info'){
    echo "<div class = '$cssClass' style='padding: 30px; width: 80%; margin: 50px auto; background: #f9dede; border: 1px solid #cca4a4; color: #521717; border-radius: 5px; font-family: sans-serif;text-align:center;'>$text</div>";;
    
}







