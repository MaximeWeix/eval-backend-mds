<?php

<p>Formulaire php</p>
<form action="getform.php" method="get">
  <label>Prénom : <input type="text"></label><br>
  <label>Nom : <input type="text"></label><br>
  <label>Ville : <input type="text"></label><br>
  <label>Adresse email : <input type="email"></label><br>
  <label>numéro de téléphone : <input type="tel"></label><br>
  <input type="submit" value="Envoyer">
</form>

GET /?say=Hi&to=Mom HTTP/1.1
Host: getform.php