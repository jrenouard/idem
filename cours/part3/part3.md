##Partie 3 : Les conditions

Nous allons aborder les conditions, mais pour cela il nous faut tout d'abord revenir sur un type de variable dont nous vous avions parlé au chapitre précédent : les booléens.

À quoi vont-ils nous servir ? À obtenir un résultat comme true (vrai) ou false (faux) lors du test d'une condition.

Une condition est une sorte de « test » afin de vérifier qu'une variable contient bien une certaine valeur.

Tout d'abord, de quoi sont constituées les conditions ? De valeurs à tester et de deux types d'opérateurs : un logique et un de comparaison.

###Les opérateurs de comparaison

Comme leur nom l'indique, ces opérateurs vont permettre de comparer diverses valeurs entre elles. En tout, ils sont au nombre de huit, les voici :

| Opérateur     | Signification  |
| ------------- |:------:|
| ==      | égal à      | 
| !=  | différent de      |
| ===| contenu et type égal à      |
| !==      | contenu ou type différent de      |
| >        | supérieur à      |
| >=        | supérieur ou égal à      |
| <        | inférieur à      |
| <=        | inférieur ou égal à      |


```javascript
var number1 = 2, number2 = 2, number3 = 4, result;
 
result = number1 == number2; // Au lieu d'une seule valeur, on en écrit deux avec l'opérateur de comparaison entre elles
alert(result); // Affiche « true », la condition est donc vérifiée car les deux variables contiennent bien la même valeur
 
result = number1 == number3;
alert(result); // Affiche « false », la condition n'est pas vérifiée car 2 est différent de 4
 
result = number1 < number3; 
alert(result); // Affiche « true », la condition est vérifiée car 2 est bien inférieur à 4
```

Comme vous le voyez, le concept n'est pas bien compliqué, il suffit d'écrire deux valeurs avec l'opérateur de comparaison souhaité entre les deux et un booléen est retourné. Si celui-ci est true alors la condition est vérifiée, si c'est false alors elle ne l'est pas.

Sur ces huit opérateurs, deux d'entre eux peuvent être difficiles à comprendre pour un débutant : il s'agit de === et !==. 

Voyons leur fonctionnement avec quelques exemples :

```javascript
var number = 4, text = '4', result;
 
result = number == text;
alert(result); // Affiche  « true » alors que « number » est un nombre et « text » une chaîne de caractères
 
result = number === text;
alert(result); // Affiche « false » car cet opérateur compare aussi les types des variables en plus de leurs valeurs
```

Les conditions « normales » font des conversions de type pour vérifier les égalités, ce qui fait que si vous voulez différencier le nombre 4 d'une chaîne de caractères contenant le chiffre 4 il vous faudra alors utiliser le triple égal ===.

###Les opérateurs logiques

Ils sont au nombre de trois :

| Opérateur    |Type de logique| Utilisation  |
| ------------- |:------:|----------------:|
| && |  ET      | valeur1 && valeur2 |
| &#124;&#124;  | OU       | valeur1 &#124;&#124; valeur2 |
| ! | NON      | !valeur |

####L'opérateur ET

Cet opérateur vérifie la condition lorsque toutes les valeurs qui lui sont passées valent true. Si une seule d'entre elles vaut false alors la condition ne sera pas vérifiée. 

Exemple :

```javascript
var result = true && true;
alert(result); // Affiche : « true »
 
result = true && false;
alert(result); // Affiche : « false »
 
result = false && false;
alert(result); // Affiche : « false »
```

####L'opérateur OU

Cet opérateur est plus « souple » car il renvoie true si une des valeurs qui lui est soumise contient true, qu'importent les autres valeurs. 

Exemple :

```javascript
var result = true || true;
alert(result); // Affiche : « true »
 
result = true || false;
alert(result); // Affiche : « true »
 
result = false || false;
alert(result); // Affiche : « false »
```

####L'opérateur NON

Cet opérateur se différencie des deux autres car il ne prend qu'une seule valeur à la fois. S'il se nomme « NON » c'est parce que sa fonction est d'inverser la valeur qui lui est passée, ainsi true deviendra false et inversement. Exemple :

```javascript
var result = false;
 
result = !result; // On stocke dans « result » l'inverse de « result », c'est parfaitement possible
alert(result); // Affiche « true » car on voulait l'inverse de « false »
 
result = !result;
alert(result); // Affiche « false » car on a inversé de nouveau « result », on est donc passé de « true » à « false »
```

### Combiner les opérateurs

Bien, nous sommes presque au bout de la partie concernant les booléens.
Avant de passer à la suite, il faudrait s'assurer que vous ayez bien compris que tous les opérateurs que nous venons de découvrir peuvent se combiner entre eux.

Tout d'abord un petit résumé (lisez attentivement) : les opérateurs de comparaison acceptent chacun deux valeurs en entrée et renvoient un booléen, tandis que les opérateurs logiques acceptent plusieurs booléens en entrée et renvoient un booléen. Si vous avez bien lu, vous comprendrez que nous pouvons donc coupler les valeurs de sortie des opérateurs de comparaison avec les valeurs d'entrée des opérateurs logiques. Exemple :

```javascript
var condition1, condition2, result;
 
condition1 = 2 > 8; // false
condition2 = 8 > 2; // true
 
result = condition1 && condition2;
alert(result); // Affiche « false »
```

Il est bien entendu possible de raccourcir le code en combinant tout ça sur une seule ligne, dorénavant toutes les conditions seront sur une seule ligne dans ce tutoriel :

```javascript
var result = 2 > 8 && 8 > 2;
alert(result); // Affiche « false »
```

Voilà tout pour les booléens et les opérateurs conditionnels, nous allons enfin pouvoir commencer à utiliser les conditions comme il se doit.



### La condition « if else »

Il existe trois types de conditions, nous allons commencer par la condition if else qui est la plus utilisée.

#### La structure if pour dire « si »

 Nous allons tout de suite entrer dans le vif du sujet avec un exemple très simple :

```javascript
if (true) {
    alert("Ce message s'est bien affiché.");
}
 
if (false) {
    alert("Pas la peine d'insister, ce message ne s'affichera pas.");
}
```

Tout d'abord, voyons de quoi est constitué une condition :

* De la structure conditionnelle if

* De parenthèses qui contiennent la condition à analyser, ou plus précisément le booléen retourné par les opérateurs conditionnels

* D'accolades qui permettent de définir la portion de code qui sera exécutée si la condition se vérifie. À noter que nous plaçons ici la première accolade à la fin de la première ligne de condition, mais vous pouvez très bien la placer comme vous le souhaitez (en dessous, par exemple).

Comme vous pouvez le constater, le code d'une condition est exécuté si le booléen reçu est true alors que false empêche l'exécution du code.

Et vu que nos opérateurs conditionnels renvoient des booléens, nous allons donc pouvoir les utiliser directement dans nos conditions :

```javascript
if (2 < 8 && 8 >= 4) { // Cette condition renvoie « true », le code est donc exécuté
    alert('La condition est bien vérifiée.');
}
 
if (2 > 8 || 8 <= 4) { // Cette condition renvoie « false », le code n'est donc pas exécuté
    alert("La condition n'est pas vérifiée mais vous ne le saurez pas vu que ce code ne s'exécute pas.");
}
```

Comme vous pouvez le constater, avant nous décomposions toutes les étapes d'une condition dans plusieurs variables, dorénavant nous vous conseillons de tout mettre sur une seule et même ligne car ce sera plus rapide à écrire pour vous et plus facile à lire pour tout le monde.

##### Petit intermède : la fonction confirm()

Afin d'aller un petit peu plus loin dans le cours, nous allons apprendre l'utilisation d'une fonction bien pratique : confirm()

Son utilisation est simple : on lui passe en paramètre une chaîne de caractères qui sera affichée à l'écran et elle retourne un booléen en fonction de l'action de l'utilisateur :

```javascript
if (confirm('Voulez-vous exécuter le code Javascript de cette page ?')) {
    alert('Le code a bien été exécuté !');
}
```

#####Mise en pratique
Essayez le code ci-dessus pour vous familiariser avec la fonction confirm()

Comme vous pouvez le constater, le code s'exécute lorsque vous cliquez sur le bouton OK et ne s'exécute pas lorsque vous cliquez sur Annuler. 

En clair : dans le premier cas la fonction renvoie true et dans le deuxième cas elle renvoie false. Ce qui en fait une fonction très pratique à utiliser avec les conditions.



####La structure else pour dire « sinon »

Admettons maintenant que vous souhaitiez exécuter un code suite à la vérification d'une condition et exécuter un autre code si elle n'est pas vérifiée. Il est possible de le faire avec deux conditions if mais il existe une solution beaucoup plus simple, la structure else :

```javascript
if (confirm('Pour accéder à ce site vous devez avoir 18 ans ou plus, cliquez sur "OK" si c\'est le cas.')) {
    alert('Vous allez être redirigé vers le site.');
} else {
    alert("Désolé, vous n'avez pas accès à ce site.");
}
```

Comme vous pouvez le constater, la structure else permet d'exécuter un certain code si la condition n'a pas été vérifiée.

Concernant la façon d'indenter vos structures if else, il est conseillé de procéder de la façon suivante :

```javascript
if ( /* condition */ ) {
    // Du code…
} else {
    // Du code…
}
```

Ainsi la structure else suit directement l'accolade de fermeture de la structure if, pas de risque de se tromper quant au fait de savoir quelle structure else appartient à quelle structure if .

Et puis c'est, selon les goûts, un peu plus « propre » à lire. Enfin vous n'êtes pas obligés de faire de cette façon, il s'agit juste d'un conseil.

####Mise en pratique
En reprenant le code de l'exercice IMC, ajoutez un condition afin d'afficher ```Attention au surpoids!!``` si l'IMC dépasse 25 et ```Vous devriez manger un peu plus``` si l'IMC est inférieur à 18.5

####La structure else if pour dire « sinon si »

Bien, vous savez exécuter du code si une condition se vérifie et si elle ne se vérifie pas, mais il serait bien de savoir fonctionner de la façon suivante :

* Une première condition est à tester 

* Une deuxième condition est présente et sera testée si la première échoue 

* Et si aucune condition ne se vérifie, la structure else fait alors son travail.

Cette espèce de cheminement est bien pratique pour tester plusieurs conditions à la fois et exécuter leur code correspondant. La structure else if permet cela, exemple :

```javascript
var floor = parseInt(prompt("Entrez l'étage où l'ascenseur doit se rendre (de -2 à 30) :"));
 
if (floor == 0) {
 
    alert('Vous vous trouvez déjà au rez-de-chaussée.');
 
} else if (-2 <= floor && floor <= 30) {
 
    alert("Direction l'étage n°" + floor + ' !');
 
} else {
 
    alert("L'étage spécifié n'existe pas.");
 
}
```

À noter que la structure else if peut être utilisée plusieurs fois de suite, la seule chose qui lui est nécessaire pour pouvoir fonctionner est d'avoir une condition avec la structure if juste avant elle.

####Mise en pratique
Toujours sur l'exercice IMC, ajouter un affichage ```Bravo, votre IMC est idéal``` si l'IMC n'est ni inférieur à 18.5 ni supérieur à 25


###La condition « switch »

Nous venons d'étudier le fonctionnement de la condition if else qui est très utile dans de nombreux cas, toutefois elle n'est pas très pratique pour faire du cas par cas ; c'est là qu'intervient switch !

Prenons un exemple : nous avons un meuble avec quatre tiroirs contenant chacun des objets différents, et il faut que l'utilisateur puisse connaître le contenu du tiroir dont il entre le chiffre.

Si nous voulions le faire avec if else ce serait assez long et fastidieux :


```javascript
var drawer = parseInt(prompt('Choisissez le tiroir à ouvrir (1 à 4) :'));
 
if (drawer == 1) {
 
    alert('Contient divers outils pour dessiner : du papier, des crayons, etc.');
 
} else if (drawer == 2) {
 
    alert('Contient du matériel informatique : des câbles, des composants, etc.');
 
} else if (drawer == 3) {
 
    alert('Ah ? Ce tiroir est fermé à clé ! Dommage !');
 
} else if (drawer == 4) {
 
    alert('Contient des vêtements : des chemises, des pantalons, etc.');
 
} else {
 
    alert("Info du jour : le meuble ne contient que 4 tiroirs et, jusqu'à preuve du contraire, les tiroirs négatifs n'existent pas.");
 
}
```

C'est long, non ? Et en plus ce n'est pas très adapté à ce que l'on souhaite faire. Le plus gros problème est de devoir réécrire à chaque fois la condition ; mais avec switch c'est un peu plus facile :

```javascript
var drawer = parseInt(prompt('Choisissez le tiroir à ouvrir (1 à 4) :'));
 
switch (drawer) {
    case 1:
        alert('Contient divers outils pour dessiner : du papier, des crayons, etc.');
    break;
 
    case 2:
        alert('Contient du matériel informatique : des câbles, des composants, etc.');
    break;
 
    case 3:
        alert('Ah ? Ce tiroir est fermé à clé ! Dommage !');
    break;
 
    case 4:
        alert('Contient des vêtements : des chemises, des pantalons, etc.');
    break;
 
    default:
        alert("Info du jour : le meuble ne contient que 4 tiroirs et, jusqu'à preuve du contraire, les tiroirs négatifs n'existent pas.");
}
```

Comme vous pouvez le constater, le code n'est pas spécialement plus court mais il est déjà mieux organisé et donc plus compréhensible. Détaillons maintenant son fonctionnement :

* On écrit le mot-clé switch suivi de la variable à analyser entre parenthèses et d'une paire d'accolades ;

* Dans les accolades se trouvent tous les cas de figure pour notre variable, définis par le mot-clé case suivi de la valeur qu'il doit prendre en compte (cela peut être un nombre mais aussi du texte) et de deux points ;

* Tout ce qui suit les deux points d'un case sera exécuté si la variable analysée par le switch contient la valeur du case ;

* À chaque fin d'un case on écrit l'instruction break pour « casser » le switch et ainsi éviter d'exécuter le reste du code qu'il contient ;

* Et enfin on écrit le mot-clé default suivi de deux points. Le code qui suit cette instruction sera exécuté si aucun des cas précédents n'a été exécuté. Attention, cette partie est optionnelle, vous n'êtes pas obligés de l'intégrer à votre code.

Dans l'ensemble, vous n'aurez pas de mal à comprendre le fonctionnement du switch, en revanche l'instruction break vous posera peut-être problème, je vous invite donc à essayer le code sans cette instruction.

Vous commencez à comprendre le problème ? Sans l'instruction break vous exécutez tout le code contenu dans le switch à partir du case que vous avez choisi. Ainsi, si vous choisissez le tiroir n°2 c'est comme si vous exécutiez ce code :

```javascript
alert('Contient du matériel informatique : des câbles, des composants, etc.');
alert('Ah ? Ce tiroir est fermé à clé ! Dommage !');
alert('Contient des vêtements : des chemises, des pantalons, etc.');
alert("Info du jour : le meuble ne contient que 4 tiroirs et, jusqu'à preuve du contraire, les tiroirs négatifs n'existent pas.");
```

Dans certains cas, ce système peut être pratique mais cela reste extrêmement rare.

Avant de clore cette partie, il est nécessaire de vous faire comprendre un point essentiel : un switch permet de faire une action en fonction d'une valeur mais aussi en fonction du type de la valeur (comme l'opérateur ===), ce qui veut dire que ce code n'affichera jamais « Bravo ! » :

```javascript
var drawer = prompt('Entrez la valeur 1 :');
 
switch (drawer) {
    case 1:
        alert('Bravo !');
    break;
 
    default:
        alert('Perdu !');
}
```

En effet, nous avons retiré la fonction parseInt() de notre code, ce qui veut dire que nous passons une chaîne de caractères à notre switch. Puisque ce dernier vérifie aussi les types des valeurs, le message « Bravo ! » ne sera jamais affiché.

En revanche, si nous modifions notre premier case pour vérifier une chaîne de caractères plutôt qu'un nombre alors nous n'avons aucun problème :

```javascript
var drawer = prompt('Entrez la valeur 1 :');
 
switch (drawer) {
    case '1':
        alert('Bravo !');
    break;
 
    default:
        alert('Perdu !');
}
```

####Mise en pratique
Sachant que le code suivant ```var day=new Date().getDay();``` renvoie un entier entre 0 et 7, utilisez un switch pour afficher le jour de la semaine correspondant.