<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 12/07/2018
 * Time: 16:16
 */

class homeController extends controller{


public function index(){
    $anuncios= new Anuncios();
    $usuarios= new Usuarios();

    $dados = array(
        'quantidade'=>$anuncios->getQuantidade(),
        'nome'=>$usuarios->getNome()

    );


   // $this->loadView('home',$dados);

    $this->loadTemplate('home',$dados);


}

    public function esqueci(){

      //  echo 'teste';
    }


    public function abrir($id){

       // echo 'teste';
    }


}