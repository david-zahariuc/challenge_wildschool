<?php
class AfficherArgonautes extends Argonautes {
    public function listerArgonautes() {
        $liste = $this->recupArgonautes();
        foreach($liste as $member) {
            echo "<div class=\"member-item\">" . $member['nom_argonaute'] . "</div>";
        }
    }
}
?>