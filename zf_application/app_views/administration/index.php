<?php

    $modelFolder = "administration"; $modelFile = "index";
    $zf_controller->Zf_loadModel($modelFolder, $modelFile);
    
    $zf_controller->zf_targetModel->buildQueries();

?>
This is the index view, executed by index action of the administration controller

