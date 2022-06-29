<?php
include "includes/ArgonautesBdd.class.php";
include "includes/ajouterArgonaute.class.php" ;
if(isset($_POST["submit"]))  {
    if((!($_POST['name']) == "") || (!($_POST['name']) == NULL)) {
    $ajouter = new AjouterArgonaute();
    $ajouter->ajouterAuArgonautesBdd($_POST['name']);
    echo    "<script> 
                alert(\"" .  $_POST['name'] . " a été ajouté avec succès\");
                window.location.replace(\"http://localhost/challenge_wildschool/index.php\");
            </script>";
    } else {
        echo    "<script> 
        if (window.confirm('Veuillez insérer le nom de l\'argonaute.')) {
            window.location.replace(\"http://localhost/challenge_wildschool/index.php\");
        }
    </script>";


    }
} else {
    echo    "<script> 
    if (window.confirm('Quelque chose s\'est mal passé. Voudriez-vous revenir revenir à la liste?')) {
        window.location.replace(\"http://localhost/challenge_wildschool/index.php\");
    }
</script>";

}
?>