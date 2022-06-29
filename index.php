<?php
include "includes/ArgonautesBdd.class.php";
include "includes/Argonautes.class.php";
include "includes/AfficherArgonautes.class.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="http://localhost/challenge_wildschool/css/style.css">
    </head>
    <!-- Header section -->
    <header>
      <h1>
        <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
        Les Argonautes
      </h1>
    </header>
    
    <!-- Main section -->
    <main>
    
      <!-- New member form -->
      <h2>Ajouter un(e) Argonaute</h2>
      <form class="new-member-form" action="ajouterArgonaute.php" method="POST">
        <label for="name">Nom de l&apos;Argonaute</label>
        <div>
          <input id="name" name="name" type="text" placeholder="Charalampos" required/>
          <button type="submit" name="submit">Envoyer</button>
        </div>
        <span class="erreur" id="msgErreur" aria-live="polite"></span>

      </form>
    
      <!-- Member list -->
      <h2>Membres de l'équipage</h2>
      <section id="liste" class="new-member-list">
        <?php
        $argonauts = new AfficherArgonautes();
        $argonauts->listerArgonautes();
        ?>
      </section>
    </main>
    
    <footer>
      <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
      <script src="http://localhost/challenge_wildschool/scripts/js_script.js"></script>
    </footer>
</html>
