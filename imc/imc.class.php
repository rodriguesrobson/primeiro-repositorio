<?php

class Imc{
    private $nome;
    private $altura;
    private $peso;
    private $classificacao;
    private $grau;
    private $imc;

    public function __construct(){
        $this->peso=0;
        $this->altura=0;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getClassificacao(){
        return $this->classificacao;
    }
    public function getGrau(){
        return $this->grau;
    }

    public function setIMC(){
        if($this->peso!=0&&$this->altura!=0){
            $this->imc = $this->imc($this->altura,$this->peso);
            $this->classificacao = $this->imc($this->altura,$this->peso,1);
            $this->grau = $this->imc($this->altura,$this->peso,2);
        }
    }

    private function imc($altura,$peso,$tipo=0){
        $imc = $peso/($altura*$altura);
        echo $imc." - ".$altura." - ".$peso." - ".$tipo."<br>";
        if($imc<18.5){
            $class = "MAGREZA";
            $grau = "0";
        }elseif($imc <24.9){
            $class = "NORMAL";
            $grau = "0";
        }elseif($imc <29.9){
            $class = "SOBREPESO";
            $grau = "I";
        }elseif($imc <39.9){
            $class = "OBESIDADE";
            $grau = "II";
        }else{
            $class = "OBESIDADE GRAVE";
            $grau = "III";
        }
        if($tipo==0){
            return $imc;
        }elseif($tipo==1){
            return $class;
        }elseif($tipo==2){
            return $grau;
        }
    }

}

?>