<?php
class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 0, $nombre2 = 0) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Le résultat de l'addition est : " . $resultat . "<br>";
    }
}

// Instanciation de la classe avec des valeurs
$operation1 = new Operation(5, 10);

// Affichage du résultat de l'addition
$operation1->addition();
?>
