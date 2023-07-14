<?php
/**
 * Affichage de la page create qui crée nouvel utilisateur
 */
function user_controller_create(){
    render(VIEW_DIR.'/user/create.php');
}

/**
 * Création de nouvel utilisateur
 */
function user_controller_store($request){
    require_once(MODEL_DIR.'/user.php');
    user_model_store($request);
    header("Location: ?module=user&action=home");
}

/**
 * Affichage de la page de login
 */
function user_controller_login(){
    render(VIEW_DIR.'/user/login.php');
}

/**
 * Éxécute la connexion
 */
function user_controller_connex($request) {
    require_once(MODEL_DIR.'/user.php');
    user_model_connex($request);
}

/**
 * Éxécute la page home d'un utilisateur
 */
function user_controller_home(){
    require_once(CHECKSESSION_DIR);
    require_once(MODEL_DIR.'/user.php');
    $data =  user_model_list();   
    if ($data == null) {
        $data = "You don't have any post yet!";
        render(VIEW_DIR.'/user/home.php', $data);
    } else {
        render(VIEW_DIR.'/user/home.php', $data);
    } 
}

/**
 * Déconnexion
 */
function user_controller_logout() {
    require_once(CHECKSESSION_DIR);
    session_destroy();
    header("Location: ?module=base&action=index");
}






?>