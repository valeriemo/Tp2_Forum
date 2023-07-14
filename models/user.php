<?php

/**
 * Création d'un nouvel utilisateur
 */
function user_model_store($request){
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    // Encrytation du password
    $salt = 'gh87423984dbt*&%&*';
    $password = password_hash($password.$salt, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    $result  = mysqli_query($connex, $sql);
    echo mysqli_error($connex);
    mysqli_close($connex);
}

/**
 * Connexion de l'utilisateur
 */
function user_model_connex($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    
    $sql = "select * from user where email = '$email' ";
    $result = mysqli_query($connex, $sql);
    $rowcount = mysqli_num_rows($result);

    if ($rowcount == 1) {

        $salt = 'gh87423984dbt*&%&*';
        $user = mysqli_fetch_assoc($result);
        $dbPassword = $user['password'];

        if(password_verify($password.$salt, $dbPassword)) {
            session_regenerate_id();
            $_SESSION['idUser'] = $user['idUser'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
            header("Location: ?module=user&action=home");
        } else {
            header("Location: ?module=user&action=login");
        }
    }
}

/**
 * Affiche les articles de l'utilisateur connecté
 */
function user_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM article WHERE idUser_id = " . $_SESSION['idUser'] . " order by date DESC";
    $result  = mysqli_query($connex, $sql);
    $count =  mysqli_num_rows($result);
    if($count < 1){
        return NULL;
    }else{
        $result = mysqli_fetch_all($result);
        mysqli_close($connex);
        return $result;
    }
}








?>