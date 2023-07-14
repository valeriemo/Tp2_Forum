<?php
function base_controller_index(){
    //echo 'Base';
    require_once(MODEL_DIR.'/article.php');
    $data =  article_model_list();
    render(VIEW_DIR.'/base/welcome.php', $data);        
}

function base_controller_error(){
    //echo 'Base';
    render(VIEW_DIR.'/base/error.php');
}

?>