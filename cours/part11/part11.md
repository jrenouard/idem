##Partie 11

###Ajax (avec JQuery youpi !)

####La fonction jQuery.ajax()

La fonction jQuery.ajax requière plusieurs paramètres (dans un objet JSON) pour fonctionner. On l'appelle de la façon suivante :

```javascript
$(document).ready(function() {

  $.ajax({
    // Mes paramètres ici
  });

});
```

Commençons par les paramètres essentiels, sans qui la fonction n'aurait aucun sens, à savoir :

* Le type de requête (GET, POST, PUT, DELETE)
* L'URL vers laquelle on va envoyer la requête
* Les données que l'on souhaite envoyer
* Que faire en cas de succès de la requête (HTTP 2xx)
* Que faire en cas d'erreur de la requête (HTTP 4xx ou 5xx)

Nous pouvons maintenant passer à nos paramètres. Le type de requête est par défaut à GET. Si c'est ce type de requête que vous souhaitez effectuer, vous n'avez donc pas besoin de le préciser.

```javascript
$.ajax({
  type: 'GET', // Le type de ma requete
  url: 'http://www.monsite.com/serveur.php', // L'url vers laquelle la requete sera envoyee
  data: {
    username: 'homer', // Les donnees que l'on souhaite envoyer au serveur au format JSON
    age: 31,
    admin: true
  }, 
  success: function(data, textStatus, jqXHR) {
    // La reponse du serveur est contenu dans data
    // On peut faire ce qu'on veut avec ici
  },
  error: function(jqXHR, textStatus, errorThrown) {
    // Une erreur s'est produite lors de la requete
  }
});
```

Comme vous pouvez le voir, j'envoi des données au serveur à l'aide du paramètre data. Ce paramètre est optionnel, si vous n'avez rien à envoyer au serveur, vous pouvez omettre ce paramètre. 
Comme ici, nous utilisons le type GET pour faire la requête, les paramètres de data seront passé dans l'url. Ainsi, la requête fera appel à la page http://www.monsite.com/serveur.php?username=Homer&age=31&admin=true. Si nous avions envoyé une requête de type POST, les paramètres auraient été envoyé dans l'en-tête HTTP et non pas dans l'URL.


Nous passons ensuite au paramètre success qui prend la forme d'une fonction anonyme. Le seul argument de cette fonction qui nous intéresse est data. A l'intérieur de la fonction anonyme, la variable data contient la réponse du serveur. Admettons que le serveur se contente de l'instruction PHP suivante :

```php
<?php
echo "Hello World!";
?>
```

La variable data contiendra alors Hello World!.

Enfin, le paramètre error prend lui aussi la forme d'une fonction anonyme de 3 arguments pas franchement utiles, ils ne sont généralement pas d'un grand secours pour nous aider à comprendre où ça coince, mieux vaut utiliser la console.

Ces paramètres sont ceux que vous utiliserez le plus souvent. Sachez qu'il y en a d'autres que vous pouvez retrouvez dans la documentation de jQuery.

####Petit exemple
Côté serveur, nous avons un fichier PHP nommé register_username.php et contenant le code suivant.

```php
<?php
session_start();

if (isset($_POST['username'])) {
  $_SESSION['username'] = $_POST['username'];
}
?>
```

Maintenant, sur notre page HTML, nous avons un formulaire contenant un champ pour le nom d'utilisateur et un bouton pour envoyer les données. Le formulaire contient une instruction PHP qui affichera votre nom d'utilisateur si celui-ci est enregistré en session. La première fois que vous allez sur la page, vous ne devez rien voir normalement.

```html
<fieldset>
  <legend>Entrez vos informations</legend>
  <div id="classic-use-response">
    <?php if (isset($_SESSION['username'])) : ?>
      <p style="color:orange;"><strong>Le nom d'utilisateur enregistré en session est <i><?= $_SESSION['username']; ?></i>.</strong></p>
    <?php endif; ?>
  </div>

  <div>
    <label for="username">Nom d'utilisateur : </label>
    <p class="input">
      <input type="text" id="username" placeholder="Votre nom d'utilisateur" />
    </p>
    <button id="classic-use-button">Envoyer les données</button>
  </div>
</fieldset>
```

A présent, nous pouvons nous consacrer sur la partie intéressante à savoir le code Javascript.

```javascript
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
      $('#classic-use-response').html('<div class="success">Nom d\'utilisateur enregistré en session. Vous pouvez <a href="' + window.location + '">rechargez la page</a> pour le voir.</div>');
    }
  });

});
```

Ma fonction ajax est liée à un évènement, le click sur le bouton ayant l'id #classic-use-button. Lorsque l'utilisateur appuie sur ce bouton, le code récupère le nom d'utilisateur entré dans le champ du formulaire et verifie que ce n'est pas une chaine vide.

Nous insérons ensuite dans la page web une image ainsi qu'un petit mot indiquant que la requête est en cours de traitement. Nous envoyons ensuite les données vers le fichier PHP à l'aide d'une requête de type POST.

Enfin, lors de la réponse du serveur, que ce soit un echec ou un succès, nous remplaçons l'image de chargement par un message.

####Mise en pratique
Afficher le nom d'utilisateur sans recharger la page.


####Récupérer du JSON avec jQuery.getJSON() Avec parsage automatique.

La fonction jQuery.ajax() peut prendre un autre paramètre, dataType. Ce paramètre sert à préciser le type de réponse que vous attendez du serveur. Par exemple html, json ou xml. Quand vous ne précisez pas ce paramètre, jQuery devine à quel type de réponse il doit se préparer grâce aux en-têtes HTTP.

Son fonctionnement est un plus simple que la fonction précédente car elle ne prend en paramètres que l'URL où récupérer le JSON et une fonction anonyme permettant de manipuler la réponse du serveur.

```javascript
$.getJSON('get_json.php', function(data) {

  // Construction d'une liste contenant les donnees JSON
  var output = "<ul>";

  // On passe en revue les cles et valeurs une a une
  $.each(data, function(key, value) {
    output += '<li><strong>' + key + ' : </strong>' + value + '</li>';
  }); 

  output += "</ul>"

  // Enfin on insere la liste dans la page
  $('#json-use-response').html(output);

});
```


Le fichier PHP répondant à la requête est le suivant :

```php
<?php
$json = array(
  "username" => "Homer",
  "age"      => 31
);
echo json_encode($json);
?>
```

Vraiment simple n'est-ce pas ? Ici, la seule petite difficulté réside dans l'utilisation de la fonction jQuery.each() qui permet de boucler sur une collection ou un objet.

####Récupérer n'importe quel contenu avec jQuery.get() HTML et autres

De la même manière que la fonction précédente, jQuery.get va aller chercher un contenu sur le serveur mais n'importe quel type de contenu cette fois. Ce sera donc à vous de traiter les données que vous recevrez et de les parser si nécessaire.

```javascript
$.get('get_comic.php', function(data) {

  // On recupere du HTML donc on l'insere "as-is" dans la page
  $('#get-use-response').html(data);

});
```

Le fichier PHP répondant à la requête :

```php
<?php
echo '<div><img src="http://s3.amazonaws.com/theoatmeal-img/comics/cat_vs_internet/13.png" alt="Internet Cat" /><p>The Oatmeal</p></div>';
?>
``` 

Ici, je me contente d'insérer le résultat dans la page car je sais que le serveur va me renvoyer du code HTML.


####Mise en pratique

##### Exercice 1
A partir d'un formulaire avec un champ texte, récupérer la page wikipedia correspondante en ajax et l'afficher. 

##### Exercice 2
A partir du formulaire d'inscription des exercices précédents :
* Ajouter 2 select, Région et Ville qui seront remplis en ajax en fonction du choix du Pays puis de la Région. Vous pouvez utiliser les tables suivantes [geo.sql.zip](http://dev.comelse.com/geo.sql.zip)
* Insérer les informations utilisateur dans une table MySql en ajax.
* Avant l'INSERT on vérifiera la présence de l'email dans la table afin de renvoyer une erreur si l'email est déjà présent.

