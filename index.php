<?php
include_once 'include/argonaute.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/boat.gif">
  <link rel="stylesheet" href="css/style.css">
  <title>Rejoignez le Navire</title>
  <meta name="google-site-verification" content="gWM9h89KslnzKkYRnZBhxA_PoYKI-QlJDDAjjDrLU_4" />
</head>
<body>
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
  <form class="new-member-form" method="POST" action="index.php">
    <label for="name">Nom de l&apos;Argonaute</label>
    <input id="name" name="name" type="text" placeholder="Charalampos" />
    <button type="submit">Envoyer</button>
  </form>
  
  <!-- Member list -->
  <h2>Membres de l'équipage</h2>
  <section class="member-list">
    <?php if(empty($result)) : ?>
      <div class="member-item">Toujours à la recherche d'un équipage digne de ce nom !!</div>
    <?php else : ?>
    <?php foreach($result as $r) : ?>
     <div class="member-item"><?= $r['praenomen'] ?></div>
    <?php endforeach ?>
    <?php endif ?>
  </section>
</main>

<footer>
  <p class="old">Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
  <p class="modif">Modifié par Thomas en Francie de l'an 2022 après John Doe</p>
</footer>
</body>
</html>