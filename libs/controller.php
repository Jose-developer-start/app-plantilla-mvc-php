<?php 

    class Controller{
        public function __construct()
        {
            $this->view = new View();
        }
        public function loadModel($model){
            $patchModel = "models/".$model."model.php";
            if(file_exists($patchModel)){
                require $patchModel;
                $modelName = $model."Model";
                $this->model = new $modelName;
            }
        }
    }