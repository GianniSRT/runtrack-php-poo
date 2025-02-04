<?php
class Animal {
    public $age;
    public $prenom;

    // Constructeur initialisant les attributs
    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    // Méthode pour faire vieillir l'animal
    public function vieillir() {
        $this->age += 1;
    }
}

// Instanciation d'un objet Animal
$monAnimal = new Animal();

// Affichage de l'âge initial
echo "Âge initial de l'animal : " . $monAnimal->age . " ans<br>";

// Faire vieillir l'animal
$monAnimal->vieillir();

// Affichage du nouvel âge après vieillissement
echo "Âge après vieillissement : " . $monAnimal->age . " ans<br>";
?>
