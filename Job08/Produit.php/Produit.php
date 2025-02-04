<?php
class Produit {
    private $nom;
    private $prixHT;
    private $TVA;

    // Constructeur pour initialiser les attributs
    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    // Méthode pour calculer le prix TTC
    public function CalculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);
    }

    // Méthode pour afficher les informations du produit
    public function afficher() {
        echo "Nom du produit : " . $this->nom . "<br>";
        echo "Prix HT : " . number_format($this->prixHT, 2) . "€<br>";
        echo "TVA : " . $this->TVA . "%<br>";
        echo "Prix TTC : " . number_format($this->CalculerPrixTTC(), 2) . "€<br><br>";
    }

    // Méthodes pour modifier les informations du produit
    public function modifierNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    public function modifierPrixHT($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    // Méthodes pour récupérer les informations du produit
    public function getNom() {
        return $this->nom;
    }

    public function getPrixHT() {
        return $this->prixHT;
    }

    public function getTVA() {
        return $this->TVA;
    }

    public function getPrixTTC() {
        return $this->CalculerPrixTTC();
    }
}

// Création de plusieurs produits
$produit1 = new Produit("Ordinateur", 800, 20);
$produit2 = new Produit("Téléphone", 500, 20);
$produit3 = new Produit("Casque Audio", 100, 10);

// Affichage des produits
echo "Informations initiales des produits :<br>";
$produit1->afficher();
$produit2->afficher();
$produit3->afficher();

// Modification du nom et du prix des produits
$produit1->modifierNom("PC Portable");
$produit1->modifierPrixHT(850);

$produit2->modifierNom("Smartphone");
$produit2->modifierPrixHT(550);

$produit3->modifierNom("Écouteurs sans fil");
$produit3->modifierPrixHT(120);

// Affichage après modification
echo "Informations après modification :<br>";
$produit1->afficher();
$produit2->afficher();
$produit3->afficher();
?>
