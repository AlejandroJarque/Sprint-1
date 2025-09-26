<?php
class PokerDice {
    public $caras;
    public $ultimaTirada;

    public function __construct() {
        $this -> caras = ["As", "K", "Q", "J", "7","8"];
        $this -> ultimaTirada = null;
    }

    public function tirar() {
        $valor = array_rand($this -> caras);
        $this -> ultimaTirada = $this -> caras[$valor];
        return $this -> ultimaTirada;
    }

    public function getUltimaTirada() {
        if($this -> ultimaTirada === null) {
            return "Aun no has tirado";
        }else {
            return $this -> ultimaTirada;
        }
        
    }
}

$miDado = new PokerDice();

echo $miDado -> tirar()."\n";
echo "La ultima tirada fue: ".$miDado -> getUltimaTirada()
?>