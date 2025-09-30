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

    public function verTiradas() {

    }
}


$miDado = new PokerDice();

echo "Tiras el dado y sale: ".$miDado -> tirar()."\n";
echo "La ultima tirada fue: ".$miDado -> getUltimaTirada()."\n"."\n";


function tirar5Dados(){
    $mis5Tiradas = new PokerDice();
    for($i = 1; $i <= 5; $i++) {
        echo "Resultado: ". $mis5Tiradas -> tirar()."\n";
    }
}

echo "Tiramos 5 dados: ". "\n";
tirar5Dados();
?>