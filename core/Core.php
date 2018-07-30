<?php

class Core {

    /*
     * funcao run serve para direcionar carregar  os controllers e as actctions(que sao os metodos)
     *
     */

    public function run()
    {
        $url = '/';
        if (isset($_GET['url'])) {


            $url .= $_GET['url'];
        }

        $params = array();

        if (!empty($url) and $url != '/') {

         $url = explode('/',$url);
                      array_shift($url);


            $currentController=$url[0].'Controller';
            array_shift($url);
           // print_r($url);

            if(isset($url[0]) && !empty($url[0])){
                $currentAction=$url[0];
                array_shift($url);

            }else{
                $currentAction='index';
            }

            if(count($url>0)){

                $params = $url;

            }

        } else {

            $currentController = 'homeController';
            $currentAction = 'index';


        }


        $c = new $currentController();
        call_user_func_array(array($c,$currentAction), $params);

        //executar uma funcao dentro de uma classe porem nao sabemos o nome dessa funcao

       // echo "CONTROLLER: ".$currentController."</br>";
       //echo "ACTION: ".$currentAction."</br>";
       //echo "PARAMETROS: ".print_r($params, true)."</br>";
    }

}

