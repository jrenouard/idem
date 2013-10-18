##Partie 12

###Mise en pratique: Ajax Tic-Tac-Toe

Créer un simple jeux de morpion multijoueur. Le but de cet exercice est de mettre en avant les intéractions entre le front et le back end.

Les 2 joueurs utilisent la même fenêtre du navigateur, donc nous n'avons pas besoin d'utiliser une base de données, de nous soucier de la sécurité ni d'envoyer les changements d'états au navigateur.

Ajouter un bouton 'new game' qui efface l'état actuel.

Mis à part ça, c'est un exercice ouvert, amusez-vous bien ;)


Indices : 

- L'état du jeux peut eventuellement être représenté, transporté dans une string.
- Le joueur qui jouera le prochain coup doit peut aussi faire partie de l'état.
- Un mouvement est constitué par la marque du joueur (X ou O) et une position (0 - 8)
- Un mouvement est valide si la position n'est pas déjà prise et si c'est le tour du joueur.
- Vérifier si la partie est gagnée ou non continuable à la fin de chaque tour.
- Valider les mouvements côté serveur, l'inteface utilisateur doit gérer les messages d'erreur des mouvements invalides dans des réponses ajax.



---------------------------------

##Et après ?

####Javascript a beaucoup evolué :


#####Côté backend

* NodeJS :

http://nodejs.org/

Nodejs est un logiciel permettant d'exécuter du JavaScript côté serveur, contrairement à ce qu'on a l'habitude de voir avec le javascript côté client.

L'avantage d'utiliser Nodejs est que javascript permet l'éxécution de tâches asynchrones, ce qui peut être pratique dans certaines situations. C'est de plus en plus souvent le cas avec le « nouveau » web qui arrive (html5/css3, etc.).
De plus, Nodejs permet de créer des applications « serveur » facilement grâce à des applications tierces qu'il prend en charge via un logiciel similaire à un gestionnaire de paquets.

http://nodejs.org/industry/ -> des gens qui utilisent NodeJS

https://github.com/joyent/node/wiki/Projects,-Applications,-and-Companies-Using-Node -> encore plus de gens

http://expressjs.com/ -> Framework MVC pour NodeJS


Nodecopter - Programmer un drone en JS

http://nodecopter.com/

```javascript
/* Install Node.js and get the ar-drone module. All you need to do then is to execute the following code with node. That will make your drone take off, move around, do a flip and carefully land again. Seriously, that's all! */

var arDrone = require('ar-drone');
var client = arDrone.createClient();

client.takeoff();

client
  .after(5000, function() {
    this.clockwise(0.5);
  })
  .after(3000, function() {
    this.animate('flipLeft', 15);
  })
  .after(1000, function() {
    this.stop();
    this.land();
  });
```



* Coffescript :

JavaScript en plus beau.
http://coffeescript.org/

et http://fr.wikipedia.org/wiki/CoffeeScript voir l'exemple de l'IMC (que vous connaissez)


#####Côté frontend

Pour étendre le HTML AngularJS :

http://angularjs.org/

Le HTML5 nous permet de faire des choses funny :

http://slides.html5rocks.com/#landing-slide

et même des jeux :

http://browserquest.mozilla.org/


####MEAN stack? wtf?

On parle désormais de plus en plus du stack MEAN (MongoDB, ExpressJS, AngularJS, NodeJS) et certainnes startup l'utilisent en production en lieux et place du classique stack LAMP.

http://www.mean.io/

####Conclusion: Stay tuned

La veille technologique et la curiosité sont les clés du métier de développeur, ne vous reposez jamais sur les technos que vous connaissez.



###Merci

Et merci de prendre le temps de remplir ce tout petit questionnaire https://docs.google.com/forms/d/186FL1_PIX6Xit1wlEYyvUTdUc9Jp1HXNMVLMuHlurlQ/viewform


