<?php
    require_once "./controllers/errores.php";
    class App{
        public function __construct()
        {
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, "/");
            $url = explode("/", $url); //Divide

            if(empty($url[0])){
                $fileController = "./controllers/main.php";
                require $fileController;
                $controller = new Main();
                //Cargando Modelo
                $controller->loadModel('main');
                $controller->render();
                return false;
            }
            $fileController = "controllers/".$url[0].".php";

            if(file_exists($fileController)){
                require_once $fileController;
                $controller = new $url[0];
                //Cargando el modelo
                $controller->loadModel($url[0]);
                //Numeros de parametros enviado por URL
                $nParam = count($url);

                if($nParam > 1){
                    //Validacion de parametros
                    if($nParam > 2){
                        //Comprobamos si existe el metodo
                        if(method_exists($controller,$url[1])){
                            $param = [];
                            for($i = 2; $i < $nParam; $i ++){
                                array_push($param,$url[$i]);
                            }
                            $controller->{$url[1]}($param);
                        }else{
                            //Error si no existe el controlador
                            $controller = new Errores();
                            $controller->render();
                        }
                        
                    }else{
                        if(method_exists($controller,$url[1])){
                            $controller->{$url[1]}();
                        }else{
                            //Error si no existe el controlador
                            $controller = new Errores();
                            $controller->render();
                        }
                    }
                }else{
                    $controller->render();
                }
            }else{
                //Error si no existe el controlador
                $controller = new Errores();
                $controller->render();
            }
            
        }
    }

