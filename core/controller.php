<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 16/07/2018
 * Time: 12:57
 */

class controller{

public function loadView($viewName, $viewData = array()) {

    extract($viewData);

require 'views/'.$viewName.'.php';

}

    public function loadTemplate($viewName, $viewData = array()){

        require 'views/template.php';


    }

    public function loadViewInTemplate($viewName, $viewData =array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}