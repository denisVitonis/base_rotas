<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 16/07/2018
 * Time: 16:53
 */
class Anuncios extends Model {

public function getQuantidade(){

$sql= "SELECT COUNT(*) as c FROM anuncios";
    $sql= $this->pdo->query($sql);

    if ($sql->rowCount() > 0) {

        $sql =  $sql->fetch();
        return $sql['c'];
    }
    else {
        return 0;
    }



}
}