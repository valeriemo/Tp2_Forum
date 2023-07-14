<?php

/**
 * Affichage de tous les article page accueil
 */
function article_controller_index(){       
    require_once(MODEL_DIR.'/article.php');
    $data =  article_model_list();
    render(VIEW_DIR.'/article/select.php', $data);
}

/**
 * Affiche la page de création d'article
 */
function article_controller_create(){
    require_once(CHECKSESSION_DIR);
    render(VIEW_DIR.'/article/create.php');
}

/**
 * Enregistre les nouveaux articles dans la bd
 */
function article_controller_store($request){
    require_once(CHECKSESSION_DIR);
    require_once(MODEL_DIR.'/article.php');
    article_model_store($request);
    header("Location: ?module=user&action=home");
}


/**
 * Affichage de la page update 
 */
function article_controller_edit($request) {
    require_once(CHECKSESSION_DIR); 
    require_once(MODEL_DIR.'/article.php');
    $result = article_model_show($request);
    render(VIEW_DIR.'/article/edit.php', $result);
}

/**
 * Update un article 
 */
function article_controller_update($request){
    require_once(CHECKSESSION_DIR);
    require_once(MODEL_DIR.'/article.php');
    article_model_update($request);
    header("Location: ?module=user&action=home");
}

/**
 * Delete un article
 */
function article_controller_delete($request){
    require_once(CHECKSESSION_DIR);
    require_once(MODEL_DIR.'/article.php');
    article_model_delete($request);
    header("Location: ?module=user&action=home");
}
?>