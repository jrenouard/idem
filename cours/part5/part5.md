##Partie 5 : Les fonctions

###Créer sa première fonction

```javascript
function myFunction(arguments) {
    // Le code que la fonction va devoir exécuter
}
```

Décortiquons un peu tout ça et analysons un peu ce que nous pouvons lire dans ce code :

* Le mot-clé function est présent à chaque déclaration de fonction. C'est lui qui permet de dire « Voilà, j'écris ici une fonction ! » ;

* Vient ensuite le nom de votre fonction, ici myFunction ;

* S'ensuit un couple de parenthèses contenant ce que l'on appelle des arguments. Ces arguments servent à fournir des informations à la fonction lors de son exécution. Par exemple, avec la fonction alert() quand vous lui passez en paramètre ce que vous voulez afficher à l'écran ;

* Et vient enfin un couple d'accolades contenant le code que votre fonction devra exécuter.

Il est important de préciser que tout code écrit dans une fonction ne s'exécutera que si vous appelez cette dernière (« appeler une fonction » signifie « exécuter »). Sans ça, le code qu'elle contient ne s'exécutera jamais.

Bien entendu, tout comme les variables, les noms de fonctions sont limités aux caractères alphanumériques (dont les chiffres) et aux deux caractères suivants : _ et $.
Bien, maintenant que vous connaissez un peu le principe d'une fonction, voici un petit exemple :

```javascript
function showMsg() {
    alert('Et une première fonction, une !');
}
 
showMsg(); // On exécute ici le code contenu dans la fonction
```

Dans ce code nous pouvons voir la déclaration d'une fonction showMsg() qui exécute elle-même une autre fonction qui n'est autre que alert() avec un message prédéfini.
Bien sûr, tout code écrit dans une fonction ne s'exécute pas immédiatement, sinon l'intérêt serait nul. C'est pourquoi à la fin du code on appelle la fonction afin de l'exécuter, ce qui nous affiche le message souhaité.

###Un exemple concret

L'intérêt d'une fonction réside notamment dans le fait de ne pas avoir à réécrire plusieurs fois le même code. Nous allons ici étudier un cas intéressant où l'utilisation d'une fonction va se révéler utile :

```javascript
var result;
 
result = parseInt(prompt('Donnez le nombre à multiplier par 2 :'));
alert(result * 2);
 
result = parseInt(prompt('Donnez le nombre à multiplier par 2 :'));
alert(result * 2);
```

Comme vous pouvez le constater, nous avons écrit ici exactement deux fois le même code, ce qui nous donne un résultat peu efficace. Nous pouvons envisager d'utiliser une boucle mais si nous voulons afficher un texte entre les deux opérations comme ceci alors la boucle devient inutilisable :

```javascript
var result;
 
result = parseInt(prompt('Donnez le nombre à multiplier par 2 :'));
alert(result * 2);
 
alert('Vous en êtes à la moitié !');
 
result = parseInt(prompt('Donnez le nombre à multiplier par 2 :'));
alert(result * 2);
```

Notre solution, ici, est donc de faire appel au système des fonctions de cette façon :

```javascript
function byTwo() {
    var result = parseInt(prompt('Donnez le nombre à multiplier par 2 :'));
    alert(result * 2);
}
 
byTwo();
 
alert('Vous en êtes à la moitié !');
 
byTwo();
```

Concrètement, qu'est-ce qui a changé ? Eh bien, tout d'abord, nous avons créé une fonction qui contient le code à exécuter deux fois (ou autant de fois qu'on le souhaite). Ensuite, nous faisons la déclaration de notre variable result directement dans notre fonction et surtout nous appelons deux fois notre fonction plutôt que de réécrire le code qu'elle contient.

Voilà l'utilité basique des fonctions : éviter la répétition d'un code. 


####Mise en pratique
Ecrire une fonction qui demande le prénom de l'utilisateur et le concatène de façon à obtenir ```"Bonjour, PRENOM !"```



###La portée des variables

Derrière ce titre se cache un concept assez simple à comprendre mais pas forcément simple à mettre en pratique car il est facile d'être induit en erreur si on ne fait pas attention. Tout d'abord, nous allons commencer par faire un constat assez flagrant à l'aide de deux exemples :

```javascript
var ohai = 'Hello world !';
 
function sayHello() {
    alert(ohai);
}
 
sayHello();
```

Ici, pas de problème, on déclare une variable dans laquelle on stocke du texte puis on crée une fonction qui se charge de l'afficher à l'écran et enfin on exécute cette dernière. Maintenant, nous allons légèrement modifier l'ordre des instructions mais l'effet devrait normalement rester le même :

```javascript
function sayHello() {
    var ohai = 'Hello world !';
}
 
sayHello();
 
alert(ohai);
```

Alors ? Aucun résultat ? Ce n'est pas surprenant ! Il s'est produit ce que l'on appelle une erreur : en clair, le code s'est arrêté car il n'est pas capable d'exécuter ce que vous lui avez demandé. L'erreur en question (nous allons revenir sur l'affichage de cette erreur dans un instant) nous indique que la variable ohai n'existe pas au moment de son affichage avec la fonction alert() alors que nous avons pourtant bien déclaré cette variable dans la fonction sayHello().

Et si je déclare la variable ohai en-dehors de la fonction ?
Là, ça fonctionnera ! Voilà tout le concept de la portée des variables : toute variable déclarée dans une fonction n'est utilisable que dans cette même fonction ! Ces variables spécifiques à une seule fonction ont un nom : les variables locales.

####Les variables globales

À l'inverse des variables locales, celles déclarées en-dehors d'une fonction sont nommées les variables globales car elles sont accessibles partout dans votre code, y compris à l'intérieur de vos fonctions.

À ce propos, qu'est-ce qui se produirait si je créais une variable globale nommée message et une variable locale du même nom ? Essayons !

```javascript
var message = 'Ici la variable globale !';
 
function showMsg() {
    var message = 'Ici la variable locale !';
    alert(message);
}
 
showMsg();
 
alert(message);
```

Comme vous pouvez le constater, quand on exécute la fonction, la variable locale prend le dessus sur la variable globale de même nom pendant tout le temps de l'exécution de la fonction. Mais une fois la fonction terminée (et donc, la variable locale détruite) c'est la variable globale qui reprend ses droits.
Il existe une solution pour utiliser la variable globale dans une fonction malgré la création d'une variable locale de même nom, mais nous étudierons cela bien plus tard car ce n'est actuellement pas de votre niveau.

À noter que, dans l'ensemble, il est plutôt déconseillé de créer des variables globales et locales de même nom, cela est souvent source de confusion.

Les variables globales ? Avec modération !

Maintenant que vous savez faire la différence entre les variables globales et locales, il vous faut savoir quand est-ce qu'il est bon d'utiliser l'une ou l'autre. Car malgré le sens pratique des variables globales (vu qu'elles sont accessibles partout) elles sont parfois à proscrire car elles peuvent rapidement vous perdre dans votre code (et engendrer des problèmes si vous souhaitez partager votre code, mais vous découvrirez cela par vous-même). Voici un exemple de ce qu'il ne faut pas faire :

```javascript
var var1 = 2, var2 = 3;
 
function calculate() {
    alert(var1 * var2); // Affiche : « 6 » (sans blague ?!)
}
 
calculate();
```

Dans ce code, vous pouvez voir que les variables var1 et var2 ne sont utilisées que pour la fonction calculate() et pour rien d'autre, or ce sont ici des variables globales. Par principe, cette façon de faire est stupide : vu que ces variables ne servent qu'à la fonction calculate(), autant les déclarer dans la fonction de la manière suivante :

```javascript
function calculate() {
    var var1 = 2, var2 = 3;
    alert(var1 * var2);
}
 
calculate();
```

Ainsi, ces variables n'iront pas interférer avec d'autres fonctions qui peuvent utiliser des variables de même nom. Et surtout, cela reste quand même plus logique !

###Les arguments et les valeurs de retour

Maintenant que vous connaissez le concept de la portée des variables, nous allons pouvoir aborder les arguments et les valeurs de retour. Ils permettent de faire communiquer vos fonctions avec le reste de votre code. Ainsi, les arguments permettent d'envoyer des informations à votre fonction tandis que les valeurs de retour représentent tout ce qui est retourné par votre fonction une fois que celle-ci a fini de travailler.

####Les arguments

#####Créer et utiliser un argument

Comme nous venons de le dire, les arguments sont des informations envoyées à une fonction. Ces informations peuvent servir à beaucoup de choses, libre à vous de les utiliser comme vous le souhaitez. D'ailleurs, il vous est déjà arrivé d'envoyer des arguments à certaines fonctions, par exemple avec la fonction alert() :

```javascript
// Voici la fonction alert sans argument, elle n'affiche rien :
    alert();
 
 // Et avec un argument, elle affiche ce que vous lui envoyez :
    alert('Mon message à afficher');
```

Selon les fonctions, vous n'aurez parfois pas besoin de spécifier d'arguments, parfois il vous faudra en spécifier un, voire plusieurs. Il existe aussi des arguments facultatifs que vous n'êtes pas obligés de spécifier.

Pour créer une fonction avec un argument, il vous suffit d'écrire de la façon suivante :

```javascript
function myFunction (arg) { // Vous pouvez mettre une espace entre le nom de la fonction et la parenthèse ouvrante si vous le souhaitez, la syntaxe est libre !
    // Votre code…
}
```

Ainsi, si vous passez un argument à cette même fonction, vous retrouverez dans la variable arg ce qui a été passé en paramètre. 

Exemple :

```javascript
function myFunction(arg) { // Notre argument est la variable « arg »
    // Une fois que l'argument a été passé à la fonction, vous allez le retrouver dans la variable « arg »
    alert('Votre argument : ' + arg);
}
 
myFunction('En voilà un beau test !');
```

Encore mieux ! Puisqu'un argument n'est qu'une simple variable, vous pouvez très bien lui passer ce que vous souhaitez, tel que le texte écrit par un utilisateur :

```javascript
function myFunction(arg) {
    alert('Votre argument : ' + arg);
}
 
myFunction(prompt('Que souhaitez-vous passer en argument à la fonction ?'));
```

Certains d'entre vous seront peut-être étonnés de voir la fonction prompt() s'exécuter avant la fonction myFunction(). Ceci est parfaitement normal, faisons un récapitulatif de l'ordre d'exécution de ce code :

* La fonction myFunction() est déclarée, son code est donc enregistré en mémoire mais ne s'exécute pas tant qu'on ne l'appelle pas ;

* À la dernière ligne, nous faisons appel à myFunction() mais en lui passant un argument, la fonction va donc attendre de recevoir tous les arguments avant de s'exécuter ;

* La fonction prompt() s'exécute puis renvoie la valeur entrée par l'utilisateur, ce n'est qu'une fois cette valeur renvoyée que la fonction myFunction() va pouvoir s'exécuter car tous les arguments auront enfin été reçus ;

* Enfin, myFunction() s'exécute !


####La portée des arguments

Si nous avons étudié dans la partie précédente la portée des variables ce n'est pas pour rien : cette portée s'applique aussi aux arguments. Ainsi, lorsqu'une fonction reçoit un argument, celui-ci est stocké dans une variable dont vous avez choisi le nom lors de la déclaration de la fonction. Voici, en gros, ce qui se passe quand un argument est reçu dans la fonction :

```javascript
function scope(arg) {
    // Au début de la fonction, la variable « arg » est créée avec le contenu de l'argument qui a été passé à la fonction
   
    alert(arg); // Nous pouvons maintenant utiliser l'argument comme souhaité : l'afficher, le modifier, etc.
 
    // Une fois l'exécution de la fonction terminée, toutes les variables contenant les arguments sont détruites
}
```

Ce fonctionnement est exactement le même que lorsque vous créez vous-mêmes une variable dans la fonction : elle ne sera accessible que dans cette fonction et nulle part ailleurs. Les arguments sont propres à leur fonction, ils ne serviront à aucune autre fonction.

####Les arguments multiples

Si votre fonction a besoin de plusieurs arguments pour fonctionner il faudra les écrire de la façon suivante :

```javascript
function moar(first, second) {
    // On peut maintenant utiliser les variables « first » et « second » comme on le souhaite :
    alert('Votre premier argument : ' + first);
    alert('Votre deuxième argument : ' + second);
}
```

Comme vous pouvez le constater, les différents arguments sont séparés par une virgule, comme lorsque vous voulez déclarer plusieurs variables avec un seul mot-clé var ! Maintenant, pour exécuter notre fonction, il ne nous reste plus qu'à passer les arguments souhaités à notre fonction, de cette manière :

```javascript
moar('Un !', 'Deux !');
```

Bien sûr, nous pouvons toujours faire interagir l'utilisateur sans problème :

```javascript
moar(prompt('Entrez votre premier argument :'), prompt('Entrez votre deuxième argument :'));
```

Vous remarquerez d'ailleurs que la lisibilité de la ligne de ce code n'est pas très bonne, nous vous conseillons de modifier la présentation quand le besoin s'en fait ressentir. Pour notre part, nous aurions plutôt tendance à écrire cette ligne de cette manière :

```javascript
moar(
    prompt('Entrez votre premier argument :'),
    prompt('Entrez votre deuxième argument :')
);
```

C'est plus propre, non ?

####Les arguments facultatifs

Maintenant, admettons que nous créions une fonction basique pouvant accueillir un argument mais que l'on ne le spécifie pas à l'appel de la fonction, que se passera-t-il ?

```javascript
function optional(arg) {
    alert(arg); // On affiche l'argument non spécifié pour voir ce qu'il contient
}
 
optional();
```

undefined, voilà ce que l'on obtient, et c'est parfaitement normal ! La variable arg a été déclarée par la fonction mais pas initialisée car vous ne lui avez pas passé d'argument. Le contenu de cette variable est donc indéfini.

Mais, dans le fond, à quoi peut bien servir un argument facultatif ?
Prenons un exemple concret : imaginez que l'on décide de créer une fonction qui affiche à l'écran une fenêtre demandant d'inscrire quelque chose (comme la fonction prompt()). La fonction possède deux arguments : le premier doit contenir le texte à afficher dans la fenêtre, et le deuxième (qui est un booléen) autorise ou non l'utilisateur à quitter la fenêtre sans entrer de texte. Voici la base de la fonction :

```javascript
function prompt2(text, allowCancel) {
 // Le code… que l'on ne créera pas :p
}
```

L'argument text est évidemment obligatoire vu qu'il existe une multitude de possibilités. En revanche, l'argument allowCancel est un booléen, il n'y a donc que deux possibilités :

À true, l'utilisateur peut fermer la fenêtre sans entrer de texte ;

À false, l'utilisateur est obligé d'écrire quelque chose avant de pouvoir fermer la fenêtre.

Comme la plupart des développeurs souhaitent généralement que l'utilisateur entre une valeur, on peut considérer que la valeur la plus utilisée sera false.

Et c'est là que l'argument facultatif entre en scène ! Un argument facultatif est évidemment facultatif (eh oui ! Smiley ) mais doit généralement posséder une valeur par défaut dans le cas où l'argument n'a pas été rempli, dans notre cas ce sera false. Ainsi, on peut donc améliorer notre fonction de la façon suivante :

1
2
3
4
5
6
7
8
9
10
function prompt2(text, allowCancel) {
 
    if (typeof allowCancel === 'undefined') { // Souvenez-vous de typeof, pour vérifier le type d'une variable
        allowCancel = false;
    }
 
 // Le code… que l'on ne créera pas =p
}
 
prompt2('Entrez quelque chose :'); // On exécute la fonction seulement avec le premier argument, pas besoin du deuxième
De cette façon, si l'argument n'a pas été spécifié pour la variable allowCancel (comme dans cet exemple) on attribue alors la valeur false à cette dernière. Bien sûr, les arguments facultatifs ne possèdent pas obligatoirement une valeur par défaut, mais au moins vous saurez comment faire si vous en avez besoin.

Petit piège à éviter : inversons le positionnement des arguments de notre fonction. Le second argument passe en premier et vice-versa. On se retrouve ainsi avec l'argument facultatif en premier et celui obligatoire en second, la première ligne de notre code est donc modifiée de cette façon :

1
function prompt2(allowCancel, text) {
Imaginons maintenant que l'utilisateur de votre fonction ne souhaite remplir que l'argument obligatoire, il va donc écrire ceci :

1
prompt2('Le texte');
Oui, mais le problème c'est qu'au final son texte va se retrouver dans la variable allowCancel au lieu de la variable text !

Alors quelle solution existe-t-il donc pour résoudre ce problème ? Aucune ! Vous devez impérativement mettre les arguments facultatifs de votre fonction en dernière position, vous n'avez pas le choix.

Les valeurs de retour

Comme leur nom l'indique, nous allons parler ici des valeurs que l'on peut retourner avec une fonction. Souvenez-vous pour les fonctions prompt(), confirm() et parseInt(), chacune d'entre elles renvoyait une valeur que l'on stockait généralement dans une variable. Nous allons donc apprendre à faire exactement la même chose ici mais pour nos propres fonctions.

Il est tout d'abord important de préciser que les fonctions ne peuvent retourner qu'une seule et unique valeur chacune, pas plus ! Il est possible de contourner légèrement le problème en renvoyant un tableau ou un objet, mais vous étudierez le fonctionnement de ces deux éléments dans les chapitres suivants, nous n'allons pas nous y attarder dans l'immédiat.
Pour faire retourner une valeur à notre fonction, rien de plus simple, il suffit d'utiliser l'instruction return suivie de la valeur à retourner. Exemple :

1
2
3
4
5
function sayHello() {
    return 'Bonjour !'; // L'instruction « return » suivie d'une valeur, cette dernière est donc renvoyée par la fonction
}
 
alert(sayHello()); // Ici on affiche la valeur retournée par la fonction sayHello()
Maintenant essayons d'ajouter une ligne de code après la ligne contenant notre return :

1
2
3
4
5
6
function sayHello() {
    return 'Bonjour !';
    alert('Attention ! Le texte arrive !');
}
 
alert(sayHello());
Essayer !

Comme vous pouvez le constater, notre premier alert() ne s'est pas affiché ! Cela s'explique par la présence du return : cette instruction met fin à la fonction, puis retourne la valeur. Pour ceux qui n'ont pas compris, la fin d'une fonction est tout simplement l'arrêt de la fonction à un point donné (dans notre cas, à la ligne du return) avec, éventuellement, le renvoi d'une valeur.

Ce fonctionnement explique d'ailleurs pourquoi on ne peut pas faire plusieurs renvois de valeurs pour une même fonction : si on écrit deux return à la suite, seul le premier sera exécuté puisque le premier return aura déjà mis un terme à l'exécution de la fonction.

Voilà tout pour les valeurs de retour. Leur utilisation est bien plus simple que pour les arguments mais reste vaste quand même, je vous conseille de vous entraîner à vous en servir car elles sont très utiles !