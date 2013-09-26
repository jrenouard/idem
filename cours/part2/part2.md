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

var text = 'Mon texte';
alert(typeof text); // Affiche : « string »

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
Déclarez 3 variables de type différents (int/string/boolean) et à l'aide de la fonction ```console.log()``` affichez leur contenu et leur type.



###Les opérateurs arithmétiques

Ces derniers sont à la base de tout calcul et sont au nombre de cinq.

| Opérateur     | Signe  |
| ------------- |:------:|
| addition      | +      | 
| soustraction  | -      |
| multiplication| *      |
| division      | /      |
| modulo        | %      |


Concernant le dernier opérateur, le modulo est tout simplement le reste d'une division. 
Par exemple, si vous divisez 5 par 2 alors il vous reste 1 ; c'est le modulo !


####Quelques calculs simples

Faire des calculs en programmation est quasiment tout aussi simple que sur une calculatrice, exemple :

```javascript
var result = 3 + 2;
alert(result); // Affiche : « 5 »
```

Alors vous savez faire des calculs avec deux nombres c'est bien, mais avec deux variables contenant elles-mêmes des nombres c'est mieux :

```javascript
var number1 = 3, number2 = 2, result;
result = number1 * number2;
alert(result); // Affiche : « 6 »
```

On peut aller encore plus loin comme ça en écrivant des calculs impliquant plusieurs opérateurs ainsi que des variables :

```javascript
var divisor = 3, result1, result2, result3;
 
result1 = (16 + 8) / 2 - 2 ; // 10
result2 = result1 / divisor;
result3 = result1 % divisor;
 
alert(result2); // Résultat de la division : 3,33
alert(result3); // Reste de la division : 1
```

Vous remarquerez que nous avons utilisé des parenthèses pour le calcul de la variable result1.
Elles s'utilisent comme en maths : grâce à elles le navigateur calcule d'abord 16 + 8 puis divise le résultat par 2.

#####Simplifier encore plus vos calculs

Par moment vous aurez besoin d'écrire des choses de ce genre :

```javascript
var number = 3;
number = number + 5;
alert(number); // Affiche : « 8 »
```

Ce n'est pas spécialement long ou compliqué à faire, mais cela peut devenir très vite rébarbatif, il existe donc une solution plus simple pour ajouter un nombre à une variable :

```javascript
var number = 3;
number += 5;
alert(number); // Affiche : « 8 »
```

Ce code a exactement le même effet que le précédent mais est plus rapide à écrire.

À noter que ceci ne s'applique pas uniquement aux additions mais fonctionne avec tous les autres opérateurs arithmétiques :

* +=

* -=

* *=

* /=

* %=


#### Concaténation et conversion des types

Certains opérateurs ont des particularités cachées. Prenons l'opérateur + ; en plus de faire des additions, il permet de faire ce que l'on appelle des concaténations entre des chaînes de caractères.

#### La concaténation

Une concaténation consiste à ajouter une chaîne de caractères à la fin d'une autre, comme dans cet exemple :

```javascript
var hi = 'Bonjour', name = 'toi', result;
result = hi + name;
alert(result); // Affiche : « Bonjourtoi »
```

Cet exemple va afficher la phrase « Bonjourtoi ». Vous remarquerez qu'il n'y a pas d'espace entre les deux mots, en effet, la concaténation respecte ce que vous avez écrit dans les variables à la lettre près. Si vous voulez un espace, il vous faut en ajouter un à l'une des variables, comme ceci : var hi = 'Bonjour ';

Autre chose, vous souvenez-vous toujours de l'addition suivante ?

```javascript
var number = 3;
number += 5;
```

Eh bien vous pouvez faire la même chose avec les chaînes de caractères :

```javascript
var text = 'Bonjour ';
text += 'toi';
alert(text); // Affiche « Bonjour toi ».
```

#### Interagir avec l'utilisateur

La concaténation est le bon moment pour introduire votre toute première interaction avec l'utilisateur grâce à la fonction prompt(). Voici comment l'utiliser :

```javascript
var userName = prompt('Entrez votre prénom :');
alert(userName); // Affiche le prénom entré par l'utilisateur
```

#### Mise en pratique
Récupérer le prénom de l'utilisateur en utilisant la fonction prompt et afficher "Bonjour PRENOM, comment allez vous ?"


#### Convertir une chaîne de caractères en nombre

Essayons maintenant de faire une addition avec des nombres fournis par l'utilisateur :

```javascript
var first, second, result;
 
first  = prompt('Entrez le premier chiffre :');
second = prompt('Entrez le second chiffre :');
result = first + second;
 
alert(result);
```

Problème, tout ce qui est écrit dans le champ de texte de prompt() est récupéré sous forme d'une chaîne de caractères, que ce soit un chiffre ou non. Du coup, si vous utilisez l'opérateur +, vous ne ferez pas une addition mais une concaténation !

C'est là que la conversion des types intervient. 

Le concept est simple : il suffit de convertir la chaîne de caractères en nombre. 
Pour cela, vous allez avoir besoin de la fonction parseInt() qui s'utilise de cette manière :

```javascript
var text = '1337', number;
 
number = parseInt(text);
alert(typeof number); // Affiche : « number »
alert(number); // Affiche : « 1337 »
```

#### Mise en pratique
Adaptez le code ci-dessus pour que l'addition fonctionne

#### Convertir un nombre en chaîne de caractères

Nous allons voir comment convertir un nombre en chaîne de caractères. Il est déjà possible de concaténer un nombre et une chaîne sans conversion, mais pas deux nombres, car ceux-ci s'ajouteraient à cause de l'emploi du +.

D'où le besoin de convertir un nombre en chaîne. Voici comment faire :

```javascript
var text, number1 = 4, number2 = 2;
text = number1 + '' + number2;
alert(text); // Affiche : « 42 »
```

Qu'avons-nous fait ? Nous avons juste ajouté une chaîne de caractères vide entre les deux nombres, ce qui aura eu pour effet de les convertir en chaînes de caractères.



#### En résumé

* Une variable est un moyen pour stocker une valeur.

* On utilise le mot clé var pour déclarer une variable, et on utilise = pour affecter une valeur à la variable.

* Les variables sont typées dynamiquement, ce qui veut dire que l'on n'a pas besoin de spécifier le type de contenu que la variable va contenir.

* Grâce à différents opérateurs, on peut faire des opérations entre les variables.

* L'opérateur + permet de concaténer des chaînes de caractères, c'est-à-dire de les mettre bout à bout.

* La fonction prompt() permet d'interagir avec l'utilisateur.


#### Mise en pratique
Nous voulons récupérer les noms, prénoms, taille et poids d'un utilisateur afin de calculer son IMC (voir [la formule ici](http://fr.wikipedia.org/wiki/Indice_de_masse_corporelle)) et d'afficher :
```
"Bonjour PRENOM NOM, votre IMC est de IMC"
```
