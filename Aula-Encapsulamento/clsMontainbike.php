<?php
require_once("clsBicicleta.php");
class Montainbike extends Bicicleta {
public $marcha;

public function __construct($id, $marca, $cor, $marcha) {
public function getMarcha() {return $this->marcha;


}

public function mudaMarcha($marcha) {public function setMarcha( $marcha): void {$this->marcha = $marcha;}

	
    echo "Bicicleta na marcha $marcha .";
}

}
}