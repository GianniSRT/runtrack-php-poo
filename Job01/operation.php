<?php
class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
}

// Instanciation de la classe
$operation1 = new Operation();

// Affichage des attributs
echo "Nombre1: " . $operation1->nombre1 . "<br>";
echo "Nombre2: " . $operation1->nombre2 . "<br>";
?>
