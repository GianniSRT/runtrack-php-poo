<?php
class Personnage {
    private $x;
    private $y;

   
    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

 
    public function gauche() {
        $this->x -= 1;
    }


    public function droite() {
        $this->x += 1;
    }

   
    public function haut() {
        $this->y -= 1;
    }

   
    public function bas() {
        $this->y += 1;
    }

    
    public function position() {
        return "Position actuelle : (" . $this->x . ", " . $this->y . ")<br>";
    }
}

// Création d'un personnage à la position (2, 3)
$joueur = new Personnage(2, 3);
echo $joueur->position();

// Déplacements
$joueur->gauche();
echo $joueur->position(); // Devrait être (1,3)

$joueur->bas();
echo $joueur->position(); // Devrait être (1,4)

$joueur->droite();
echo $joueur->position(); // Devrait être (2,4)

$joueur->haut();
echo $joueur->position(); // Devrait être (2,3)
?>
