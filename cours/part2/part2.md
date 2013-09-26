##Partie 2 : Le langage Javascript


### Les variables

Pour faire simple, une variable est un espace de stockage sur votre ordinateur permettant d'enregistrer tout type de donnée, que ce soit une chaîne de caractères, une valeur numérique ou bien des structures un peu plus particulières.

####Déclarer une variable

Tout d'abord, qu'est-ce que « déclarer une variable » veut dire ? 
Il s'agit tout simplement de lui réserver un espace de stockage en mémoire, rien de plus. Une fois la variable déclarée, vous pouvez commencer à y stocker des données sans problème.

Pour déclarer une variable, il vous faut d'abord lui trouver un nom. Il est important de préciser que le nom d'une variable ne peut contenir que des caractères alphanumériques, autrement dit les lettres de A à Z et les chiffres de 0 à 9 ; l'underscore (_) et le dollar ($) sont aussi acceptés.

Autre chose : le nom de la variable ne peut pas commencer par un chiffre et ne peut pas être constitué uniquement de mots-clés utilisés par le Javascript. Par exemple, vous ne pouvez pas créer une variable nommée var car vous allez constater que ce mot-clé est déjà utilisé, en revanche vous pouvez créer une variable nommée var_.

Concernant les mots-clés utilisés par le Javascript, on peut les appeler « les mots réservés », tout simplement parce que vous n'avez pas le droit d'en faire usage en tant que noms de variables.

Pour déclarer une variable, il vous suffit d'écrire la ligne suivante :

```javascript
var myVariable;
```

Le Javascript étant un langage sensible à la casse, faites bien attention à ne pas vous tromper sur les majuscules et minuscules utilisées car, dans l'exemple suivant, nous avons bel et bien trois variables différentes déclarées :

```javascript
var myVariable;
var myvariable;
var MYVARIABLE;
```

Le mot-clé var est présent pour indiquer que vous déclarez une variable. Une fois celle-ci déclarée, il ne vous est plus nécessaire d'utiliser ce mot-clé pour cette variable et vous pouvez y stocker ce que vous souhaitez :

```javascript
var myVariable;
myVariable = 2;
```

Le signe = sert à attribuer une valeur à la variable ; ici nous lui avons attribué le nombre 2. Quand on donne une valeur à une variable, on dit que l'on fait une affectation, car on affecte une valeur à la variable.

Il est possible de simplifier ce code en une seule ligne :

```javascript
var myVariable = 5.5; // Comme vous pouvez le constater, les nombres à virgule s'écrivent avec un point
```

De même, vous pouvez déclarer et assigner des variables sur une seule et même ligne :

```javascript
var myVariable1, myVariable2 = 4, myVariable3;
```

Ici, nous avons déclaré trois variables en une ligne mais seulement la deuxième s'est vu attribuer une valeur.

Une petite précision ici s'impose : quand vous utilisez une seule fois l'instruction var pour déclarer plusieurs variables, vous devez placer une virgule après chaque variable (et son éventuelle attribution de valeur) et vous ne devez utiliser le point-virgule (qui termine une instruction) qu'à la fin de la déclaration de toutes les variables.
Et enfin une dernière chose qui pourra vous être utile de temps en temps :

```javascript
var myVariable1, myVariable2;
myVariable1 = myVariable2 = 2;
```

Les deux variables contiennent maintenant le même nombre : 2 ! 
Vous pouvez faire la même chose avec autant de variables que vous le souhaitez.

####Les types de variables

Contrairement à de nombreux langages, le Javascript est un langage typé dynamiquement. Cela veut dire, généralement, que toute déclaration de variable se fait avec le mot-clé var sans distinction du contenu, tandis que dans d'autres langages, comme le C, il est nécessaire de préciser quel type de contenu la variable va devoir contenir.

En Javascript, nos variables sont typées dynamiquement, ce qui veut dire que l'on peut y mettre du texte en premier lieu puis l'effacer et y mettre un nombre quel qu'il soit, et ce, sans contraintes.

Commençons tout d'abord par voir quels sont les trois types principaux en Javascript :

* Le type numérique (alias number) : il représente tout nombre, que ce soit un entier, un négatif, un nombre scientifique, etc. Bref, c'est le type pour les nombres.
Pour assigner un type numérique à une variable, il vous suffit juste d'écrire le nombre seul : 

```javascript
var number = 5;
```

Tout comme de nombreux langages, le Javascript reconnaît plusieurs écritures pour les nombres, comme l'écriture décimale 

```javascript
var number = 5.5; 
```

ou l'écriture scientifique

```javascript
var number = 3.65e+5;
```

ou encore l'écriture hexadécimale 

```javascript
var number = 0x391;
```

Bref, il existe pas mal de façons d'écrire les valeurs numériques !

* Les chaînes de caractères (alias string) : ce type représente n'importe quel texte.
On peut l'assigner de deux façons différentes :

```javascript
var text1 = "Mon premier texte"; // Avec des guillemets
var text2 = 'Mon deuxième texte'; // Avec des apostrophes
```

Il est important de préciser que si vous écrivez var myVariable = '2'; alors le type de cette variable est une chaîne de caractères et non pas un type numérique.

Une autre précision importante, si vous utilisez les apostrophes pour « encadrer » votre texte et que vous souhaitez utiliser des apostrophes dans ce même texte, il vous faudra alors « échapper » vos apostrophes de cette façon :

```javascript
var text = 'Ça c\'est quelque chose !';
```

Pourquoi ? Car si vous n'échappez pas votre apostrophe, le Javascript croira que votre texte s'arrête à l'apostrophe contenue dans le mot « c'est ». À noter que ce problème est identique pour les guillemets.
En ce qui nous concerne, nous utilisons généralement les apostrophes mais quand le texte en contient trop alors les guillemets peuvent être bien utiles. C'est à vous de voir comment vous souhaitez présenter vos codes, libre à vous de faire comme vous le souhaitez !

* Les booléens (alias boolean) : les booléens sont un type bien particulier, pour faire simple, un booléen est un type à deux états qui sont les suivants : vrai ou faux. Ces deux états s'écrivent de la façon suivante :

```javascript
var isTrue = true;
var isFalse = false;
```

Voilà pour les trois principaux types.

###Tester l'existence de variables avec typeof

Il se peut que vous ayez un jour ou l'autre besoin de tester l'existence d'une variable ou d'en vérifier son type. Dans ce genre de situations, l'instruction typeof est très utile, voici comment l'utiliser :

```javascript
var number = 2;
alert(typeof number); // Affiche : « number »
```
 
```javascript
var text = 'Mon texte';
alert(typeof text); // Affiche : « string »
```

```javascript 
var aBoolean = false;
alert(typeof aBoolean); // Affiche : « boolean »
```

Et maintenant voici comment tester l'existence d'une variable :

```javascript
alert(typeof nothing); // Affiche : « undefined »
```

Voilà un type de variable très important ! 
Si l'instruction typeof vous renvoie undefined, c'est soit que votre variable est inexistante, soit qu'elle est déclarée mais ne contient rien.

####Mise en pratique 
Déclarez 3 variables de types différents (int/string/boolean) et à l'aide de la fonction ```console.log()``` affichez leur contenu et leur type.
