<?php

/**
 * Affiche les tous les articles sur la page d'accueil
 */
function article_model_list(){
    require(CONNEX_DIR);
    $sql = $sql = "SELECT * FROM article inner join user on idUser = idUser_id ORDER BY date DESC";
    $result  = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}


/**
 * Enregistre les nouveaux articles dans la bd
 */
function article_model_store($request){
    require(CONNEX_DIR);
    require(CHECKSESSION_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "INSERT INTO article (title, text, date, idUser_id) VALUES ('$title', '$text', '$date', '$idUser')";
    $result  = mysqli_query($connex, $sql);
    mysqli_close($connex);
    
}

/**
 * Update un article
 */
function article_model_update($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE article SET title ='$title', text = '$text', date = '$date' WHERE id = '$id'";
    $result  = mysqli_query($connex, $sql);
    mysqli_close($connex); 
}

/**
 * Delete un article
 */
function article_model_delete($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "DELETE FROM article WHERE id = '$id'";
    $result  = mysqli_query($connex, $sql);
    mysqli_close($connex); 
}

/**
 * Show 1 article en particuler
 */
function article_model_show($request){

    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $request['id']);
    $sessionId = $_SESSION['idUser'];
    $sql = "SELECT * FROM article WHERE id = '$id' AND idUser_id = '$sessionId'";
    $result  = mysqli_query($connex, $sql);
    $count =  mysqli_num_rows($result);
    if($count != 1){
        return false;
    }else{
        $result = mysqli_fetch_assoc($result);
        return $result;
    }
}

?>