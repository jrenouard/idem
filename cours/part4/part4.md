##Partie 3 : Les boucles

###La boucle while

Ici il s'agit de répéter une série d'instructions. La répétition se fait jusqu'à ce qu'on dise à la boucle de s'arrêter. À chaque fois que la boucle se répète on parle d'itération (qui est en fait un synonyme de répétition).


Pour faire fonctionner une boucle, il est nécessaire de définir une condition. Tant que celle-ci est vraie (true), la boucle se répète. Dès que la condition est fausse (false), la boucle s'arrête.

Voici un exemple de la syntaxe d'une boucle while :

```javascript
while (condition) {
    instruction_1;
    instruction_2;
    instruction_3;
}
```

####Répéter tant que…

La boucle while se répète tant que la condition est validée. Cela veut donc dire qu'il faut s'arranger, à un moment, pour que la condition ne soit plus vraie, sinon la boucle se répéterait à l'infini, ce qui serait fâcheux.

En guise d'exemple, on va incrémenter un nombre, qui vaut 1, jusqu'à ce qu'il vaille 10 :

```javascript
var number = 1;
 
while (number < 10) {
    number++;
}
 
alert(number); // Affiche : « 10 »
```

Au départ, number vaut 1. Arrive ensuite la boucle qui va demander si number est strictement plus petit que 10. Comme c'est vrai, la boucle est exécutée, et number est incrémenté. À chaque fois que les instructions présentes dans la boucle sont exécutées, la condition de la boucle est réévaluée pour savoir s'il faut réexécuter la boucle ou non. Dans cet exemple, la boucle se répète jusqu'à ce que number soit égal à 10. Si number vaut 10, la condition number < 10 est fausse, et la boucle s'arrête. Quand la boucle s'arrête, les instructions qui suivent la boucle (la fonction alert() dans notre exemple) sont exécutées normalement.

####Exemple pratique

Imaginons un petit script qui va demander à l'internaute son prénom, ainsi que les prénoms de ses frères et sœurs. Ce n'est pas compliqué à faire direz-vous, puisqu'il s'agit d'afficher une boîte de dialogue à l'aide de prompt() pour chaque prénom. Seulement, comment savoir à l'avance le nombre de frères et sœurs ?

Nous allons utiliser une boucle while, qui va demander, à chaque passage dans la boucle, un prénom supplémentaire. La boucle ne s'arrêtera que lorsque l'utilisateur choisira de ne plus entrer de prénom.

```javascript
var nicks = '', nick,
    proceed = true;
 
while (proceed) {
    nick = prompt('Entrez un prénom :');
   
    if (nick) {
        nicks += nick + ' '; // Ajoute le nouveau prénom ainsi qu'une espace juste après
    } else {
        proceed = false; // Aucun prénom n'a été entré, donc on fait en sorte d'invalider la condition
    }
}
 
alert(nicks); // Affiche les prénoms à la suite
```

La variable proceed est ce qu'on appelle une variable témoin, ou bien une variable de boucle, ou un flag. C'est une variable qui n'intervient pas directement dans les instructions de la boucle mais qui sert juste pour tester la condition. Nous avons choisi de la nommer proceed, qui veut dire « poursuivre » en anglais.

À chaque passage dans la boucle, un prénom est demandé et sauvé temporairement dans la variable nick. On effectue alors un test sur nick pour savoir si elle contient quelque chose, et dans ce cas, on ajoute le prénom à la variable nicks. Remarquez que j'ajoute aussi une simple espace, pour séparer les prénoms. Si par contre nick contient la valeur null — ce qui veut dire que l'utilisateur n'a pas entré de prénom ou a cliqué sur Annuler — on change la valeur de proceed en false, ce qui invalidera la condition, et cela empêchera la boucle de refaire une itération.

####Quelques améliorations

####Utilisation de break

Dans l'exemple des prénoms, nous utilisons une variable de boucle pour pouvoir arrêter la boucle. Cependant, il existe un mot-clé pour arrêter la boucle d'un seul coup. Ce mot-clé est break, et il s'utilise exactement comme dans la structure conditionnelle switch, vue au chapitre précédent. Si l'on reprend l'exemple, voici ce que ça donne avec un break :

```javascript
var nicks = '', nick;
 
while (true) {
    nick = prompt('Entrez un prénom :');
   
    if (nick) {
        nicks += nick + ' '; // Ajoute le nouveau prénom ainsi qu'une espace juste après
    } else {
        break; // On quitte la boucle
    }
}
 
alert(nicks); // Affiche les prénoms à la suite
```

####Utilisation de continue

Cette instruction est plus rare, car les opportunités de l'utiliser ne sont pas toujours fréquentes. continue, un peu comme break, permet de mettre fin à une itération, mais attention, elle ne provoque pas la fin de la boucle : l'itération en cours est stoppée, et la boucle passe à l'itération suivante.


###La boucle do while
La boucle do while ressemble très fortement à la boucle while, sauf que dans ce cas la boucle est toujours exécutée au moins une fois. Dans le cas d'une boucle while, si la condition n'est pas valide, la boucle n'est pas exécutée. Avec do while, la boucle est exécutée une première fois, puis la condition est testée pour savoir si la boucle doit continuer.

Voici la syntaxe d'une boucle do while :

```javascript
do {
    instruction_1;
    instruction_2;
    instruction_3;
} while (condition);
```

On note donc une différence fondamentale dans l'écriture par rapport à la boucle while, ce qui permet de bien faire la différence entre les deux. Cela dit, l'utilisation des boucles do while n'est pas très fréquente, et il est fort possible que vous n'en ayez jamais l'utilité car généralement les programmeurs utilisent une boucle while normale, avec une condition qui fait que celle-ci est toujours exécutée une fois.


###La boucle for


La boucle for ressemble dans son fonctionnement à la boucle while, mais son architecture paraît compliquée au premier abord. La boucle for est en réalité une boucle qui fonctionne assez simplement, mais qui semble très complexe pour les débutants en raison de sa syntaxe. Une fois que cette boucle est maîtrisée, il y a fort à parier que c'est celle-ci que vous utiliserez le plus souvent.

Le schéma d'une boucle for est le suivant :

```javascript
for (initialisation; condition; incrémentation) {
    instruction_1;
    instruction_2;
    instruction_3;
}
```

Dans les parenthèses de la boucle ne se trouve plus juste la condition, mais trois blocs : initialisation, condition, et incrémentation. Ces trois blocs sont séparés par un point-virgule ; c'est un peu comme si les parenthèses contenaient trois instructions distinctes.

####for, la boucle conçue pour l'incrémentation

La boucle for possède donc trois blocs qui la définissent. Le troisième est le bloc d'incrémentation qu'on va utiliser pour incrémenter une variable à chaque itération de la boucle. De ce fait, la boucle for est très pratique pour compter ainsi que pour répéter la boucle un nombre défini de fois.

Dans l'exemple suivant, on va afficher cinq fois une boîte de dialogue à l'aide de alert(), qui affichera le numéro de chaque itération :

```javascript
for (var iter = 0; iter < 5; iter++) {
    alert('Itération n°' + iter);
}
```

Dans le premier bloc, l'initialisation, on initialise une variable appelée iter qui vaut 0. On définit dans la condition que la boucle continue tant qu'iter est strictement inférieure à 5. Enfin, dans le bloc d'incrémentation, on indique qu'iter sera incrémentée à chaque itération terminée.


#####Reprenons notre exemple

Avec les quelques points de théorie que nous venons de voir, nous pouvons réécrire notre exemple des prénoms, tout en montrant qu'une boucle for peut être utilisée sans le comptage :

```javascript
for (var nicks = '', nick; true;) {
    nick = prompt('Entrez un prénom :');
   
    if (nick) {
        nicks += nick + ' ';  
    } else {
        break;  
    }   
}
 
alert(nicks);
```

Dans le bloc d'initialisation (le premier), on commence par initialiser nos deux variables. Vient alors le bloc avec la condition (le deuxième), qui vaut simplement true. On termine par le bloc d'incrémentation et… il n'y en a pas besoin ici, puisqu'il n'y a pas besoin d'incrémenter. On le fera pour un autre exemple juste après. Ce troisième bloc est vide, mais existe. C'est pour cela que l'on doit quand même mettre le point-virgule après le deuxième bloc (la condition).

Maintenant, modifions la boucle de manière à compter combien de prénoms ont été enregistrés. Pour ce faire, nous allons créer une variable de boucle, nommée i, qui sera incrémentée à chaque passage de boucle.

Les variables de boucles for sont généralement nommées i. Si une boucle se trouve dans une autre boucle, la variable de cette boucle sera nommée j, puis k et ainsi de suite. C'est une sorte de convention implicite, que l'on retrouve dans la majorité des langages de programmation.

```javascript
for (var i = 0, nicks = '', nick; true; i++) {
    nick = prompt('Entrez un prénom :');
   
    if (nick) {
        nicks += nick + ' ';  
    } else {
        break;  
    }   
}
 
alert('Il y a ' + i + ' prénoms :\n\n' + nicks);
```

La variable de boucle a été ajoutée dans le bloc d'initialisation. Le bloc d'incrémentation a lui aussi été modifié : on indique qu'il faut incrémenter la variable de boucle i. Ainsi, à chaque passage dans la boucle, i est incrémentée, ce qui va nous permettre de compter assez facilement le nombre de prénoms ajoutés.

####Portée des variables de boucle

En Javascript, il est déconseillé de déclarer des variables au sein d'une boucle (entre les accolades), pour des soucis de performance (vitesse d'exécution) et de logique : il n'y a en effet pas besoin de déclarer une même variable à chaque passage dans la boucle ! Il est conseillé de déclarer les variables directement dans le bloc d'initialisation, comme montré dans les exemples. Mais attention : une fois que la boucle est exécutée, la variable existe toujours, ce qui explique que dans l'exemple précédent on puisse récupérer la valeur de i une fois la boucle terminée. Ce comportement est différent de celui de nombreux autres langages, dans lesquels une variable déclarée dans une boucle est « détruite » une fois la boucle exécutée.

La boucle for est très utilisée en Javascript, bien plus que la boucle while, contrairement à d'autres langages de programmation. Comme nous le verrons par la suite, le fonctionnement même du Javascript fait que la boucle for est nécessaire dans la majorité des cas comme la manipulation des tableaux ainsi que des objets.

###En résumé

* L'incrémentation est importante au sein des boucles. Incrémenter ou décrémenter signifie ajouter ou soustraire une unité à une variable. Le comportement d'un opérateur d'incrémentation est différent s'il se place avant ou après la variable.

* La boucle while permet de répéter une liste d'instructions tant que la condition est vérifiée.

* La boucle do while est une variante de while qui sera exécutée au moins une fois, peu importe la condition.

* La boucle for est une boucle utilisée pour répéter une liste d'instructions un certain nombre de fois. C'est donc une variante très ciblée de la boucle while.


####Mise en pratique
######Exercice 1
Ecrivez un script qui va demander à l'utilisateur le nombre de lignes souhaitées et créer une pyramide de *

ex: ```"Combien de lignes ?"``` -> 5

resultat:
```
*
**
***
****
*****
```


######Exercice 2 - FizzBuzz
Ecrire un script qui affiche les entiers de 1 à 100. Mais pour les multiples de 3, afficher "Fizz" au lieu du nombre et pour les multiples de 5, afficher "Buzz". Pour les nombres qui sont à la fois multiple de 3 et 5, afficher "FizzBuzz"