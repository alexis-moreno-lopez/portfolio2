<?php

// Définir une interface Animal
interface Animal {
    public function manger();
    public function dormir();
}

// Implémenter l'interface dans une classe
class Chat implements Animal {
    public function manger() {
        echo "Le chat mange sa nourriture.";
    }

    public function dormir() {
        echo "Le chat dort dans son panier.";
    }
}

// Utiliser l'objet créé à partir de la classe
$monChat = new Chat();

$monChat->manger();
echo "<br>";
$monChat->dormir();

?>
