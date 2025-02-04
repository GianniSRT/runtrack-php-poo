<?php
class Personne {
    public $nom;
    public $prenom;

    // Constructeur pour initialiser nom et prénom
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode pour présenter la personne
    public function SePresenter() {
        return "Bonjour, je m'appelle " . $this->prenom . " " . $this->nom . ".<br>";
    }
}

// Instanciation de plusieurs personnes
$personne1 = new Personne("Gianni", "Jean");
$personne2 = new Personne("Axel", "Justin");
$personne3 = new Personne("Aurélie", "Justin");

// Affichage des présentations
echo $personne1->SePresenter();
echo $personne2->SePresenter();
echo $personne3->SePresenter();
?>
