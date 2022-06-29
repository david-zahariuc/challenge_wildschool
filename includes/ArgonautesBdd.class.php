<?php
class ArgonautesBdd {
    private $nomServeur;
    private $utilisateur;
    private $motDePass;
    private $nomBdd;

    protected function connecter() {
        $this->nomServeur = "localhost";
        $this->utilisateur = "root";
        $this->motDePass = "";
        $this->nomBdd = "les_argonautes";

        $conn = new mysqli($this->nomServeur,$this->utilisateur,$this->motDePass,$this->nomBdd);

        return $conn;
    }

}
?>