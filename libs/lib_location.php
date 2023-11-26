<?php defined("base_path") OR die("Permission Denied");



function insert_location($data){
    global $pdo;

    $get_current_user_id = get_user_id();

    $sql = "INSERT INTO locations (user_id, title, latitude, longitude, type) 
    VALUES(:user_id, :title, :latitude, :longitude, :typ)";
    
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':user_id'=>$get_current_user_id, ':title'=>$data["title"], ':latitude'=>$data['latitude'], ':longitude'=>$data['longitude'], ':typ'=>$data["type"]]);
    return $stmt->rowCount();
    

}