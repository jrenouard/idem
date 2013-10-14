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


###Allez plus loin

####Javascript a beaucoup evolué :


#####Côté backend

NodeJs
http://nodejs.org/
http://nodejs.org/industry/
https://github.com/joyent/node/wiki/Projects,-Applications,-and-Companies-Using-Node
http://expressjs.com/

Coffescript
http://coffeescript.org/


#####Côté frontend

Pour étendre le HTML AngularJS :
http://angularjs.org/

Le HTML5 nous permet de faire des choses funny :
http://slides.html5rocks.com/#landing-slide


####MEAN stack? wtf?

On parle désormais de plus en plus du stack MEAN (MongoDB, ExpressJS, AngularJS, NodeJS) et certainnes startup l'utilisent en production en lieux et place du classique stack LAMP.

http://www.mean.io/

####Conclusion: Stay tuned

La veille technologique et la curiosité sont les clés du métier de développeur, ne vous reposez jamais sur les technos que vous connaissez.


