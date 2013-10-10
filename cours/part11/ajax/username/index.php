<?php
session_start();
?>
<fieldset>
  <legend>Entrez vos informations</legend>
  <div id="classic-use-response">
    <?php if (isset($_SESSION['username'])) { ?>
      <p style="color:orange;"><strong>Le nom d'utilisateur enregistré en session est <i><?= $_SESSION['username']; ?></i>.</strong></p>
    <?php } ?>
  </div>

  <div>
    <label for="username">Nom d'utilisateur : </label>
    <p class="input">
      <input type="text" id="username" placeholder="Votre nom d'utilisateur" />
    </p>
    <button id="classic-use-button">Envoyer les données</button>
  </div>
</fieldset>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
var loader = "loader.gif";

$('#classic-use-button').click(function() {

  // Recuperation du nom d'utilisateur
  var username = $('#username').val();

  // Si le nom d'utilisateur est vide on signale l'erreur
  if (username.length < 1) {
    $('#classic-use-response').html('<div class="error">Le nom d\'utilisateur ne doit pas être vide.</div>');
    // Sortie de la fonction, on ne va pas plus loin
    return false;
  }

  // Si on arrive ici c'est que le nom d'utilisateur est fourni
  // On va donc signaler que nous sommes en train de faire quelque chose à l'aide d'une petite image
  $('#classic-use-response').html('<img src="' + loader + '" alt="#" />&nbsp;Chargement...');

  // Maintenant nous pouvons commencer l'envoi des donnees
  $.ajax({
    url: 'username.php',
    type: 'POST',
    data: {
      username: username
    },
    error: function(jqXHR, textStatus, errorThrown) {
      // En cas d'erreur, on le signale
      $('#classic-use-response').html('<div class="error">Une erreur est survenue lors de la requête.</div>');
    },
    success: function(data, textStatus, jqXHR) {
      // Succes. On affiche un message de confirmation
      // $('#classic-use-response').html('<div class="success">Nom d\'utilisateur enregistré en session. Vous pouvez <a href="' + window.location + '">rechargez la page</a> pour le voir.</div>');
      $('#classic-use-response').html('<p style="color:orange;"><strong>Le nom d\'utilisateur enregistré en session est <i>'+data+'</i>.</strong></p>');
    }
  });

});
</script>