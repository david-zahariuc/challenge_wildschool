<?php
  class AjouterArgonaute extends ArgonautesBdd {
    
    public function ajouterAuArgonautesBdd($nomArgonaut){
            $sql = "INSERT INTO argonaute (id_argonaute, nom_argonaute) VALUES ( NULL ,\"" . $nomArgonaut . "\");";
            $result = $this->connecter()->query($sql);

    }

  }
?>