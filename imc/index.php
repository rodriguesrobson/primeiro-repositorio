<?php
    include_once("imc.class.php");

    $obj = new IMC();

    $obj->setNome("Felipe");
    $obj->setPeso("90");
    $obj->setAltura("1.75");

    $obj->setIMC();

    echo $obj->getNome()." é classificado como: ".$obj->getClassificacao()." e tem grau de obesidade ".$obj->getGrau();
?>