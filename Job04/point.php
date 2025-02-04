<?php
class Point {
    private $x;
    private $y;

    // Constructeur pour initialiser les coordonnées x et y
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées du point
    public function afficherLesPoints() {
        echo "Coordonnées du point : (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthode pour afficher X
    public function afficherX() {
        echo "Valeur de X : " . $this->x . "<br>";
    }

    // Méthode pour afficher Y
    public function afficherY() {
        echo "Valeur de Y : " . $this->y . "<br>";
    }

    // Méthode pour changer la valeur de X
    public function changerX($nouveauX) {
        $this->x = $nouveauX;
    }

    // Méthode pour changer la valeur de Y
    public function changerY($nouveauY) {
        $this->y = $nouveauY;
    }
}

// Création d'un point avec les coordonnées (3, 5)
$point1 = new Point(3, 5);

// Affichage des coordonnées initiales
$point1->afficherLesPoints();

// Modification des coordonnées
$point1->changerX(10);
$point1->changerY(15);

// Affichage des nouvelles coordonnées
$point1->afficherLesPoints();
?>
