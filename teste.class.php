<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;


    public function _construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome']);
        echo $pessoa->getNome();
    }
}new Teste();

?>