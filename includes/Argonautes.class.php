<?php
class Argonautes extends ArgonautesBdd {
    protected function recupArgonautes() {
        $sql = "SELECT nom_argonaute FROM argonaute;";
        $result = $this->connecter()->query($sql);
        $nbLignes = $result->num_rows;
        if($nbLignes > 0) {
            while($ligne = $result->fetch_assoc())  {
                $noms[] = $ligne;
            }
            return $noms;
        }
    }
}
?>