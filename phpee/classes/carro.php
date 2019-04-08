<?php
class carro 
{
    private $modelo;
    private $motor;
    private $ano;

    public function __construct($modelo,$motor,$ano) {
        $this->modelo = $modelo;
        $this->motor = $motor;
        $this->ano = $ano;
    }

    public function __destruct()
    {
        echo "<br> DESTRUINDO...";
    }

    public function __toString()
    {
        return $this->modelo . ",". $this->motor .",". $this->ano;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getModelo(){
        return $this->modelo;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }
    
    public function getMotor(){
        return $this->motor;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }
    
    public function getAno(){
        return $this->ano;
    }

    public function exibe(){
       return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }

    

}

$gol = new carro("gol g3","1.6","ano");

echo $gol;