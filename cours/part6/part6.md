##Partie 6 : Les tableaux

###Les indices

Comme vous le voyez dans le tableau, la numérotation des items commence à 0 ! C'est très important, car il y aura toujours un décalage d'une unité : l'item numéro 1 porte l'indice 0, et donc le cinquième item porte l'indice 4. Vous devrez donc faire très attention à ne pas vous emmêler les pinceaux, et à toujours garder cela en tête, sinon ça vous posera problème.

###Déclarer un tableau

On utilise bien évidemment var pour déclarer un tableau, mais la syntaxe pour définir les valeurs est spécifique :

```javascript
var myArray = ['Sébastien', 'Laurence', 'Ludovic', 'Pauline', 'Guillaume'];
```

Le contenu du tableau se définit entre crochets, et chaque valeur est séparée par une virgule. Les valeurs sont introduites comme pour des variables simples, c'est-à-dire qu'il faut des guillemets ou des apostrophes pour définir les chaînes de caractères :

```javascript
var myArray_a = [42, 12, 6, 3];
var myArray_b = [42, 'Sébastien', 12, 'Laurence'];
```

On peut schématiser le contenu du tableau myArray ainsi :

| Indice | 0 | 1 | 2 | 3 | 4 |
|--------|---|---|---|---|---|
| Donnée | Sébastien | Laurence | Ludovic | Pauline | Guillaume |

L'index numéro 0 contient « Sébastien », tandis que le 2 contient « Ludovic ».

La déclaration par le biais de crochets est la syntaxe courte. Il se peut que vous rencontriez un jour une syntaxe plus longue qui est vouée à disparaître. Voici à quoi ressemble cette syntaxe :

```javascript
var myArray = new Array('Sébastien', 'Laurence', 'Ludovic', 'Pauline', 'Guillaume');
```

Le mot-clé new de cette syntaxe demande au Javascript de définir un nouvel array dont le contenu se trouve en paramètre (un peu comme une fonction). Vous verrez l'utilisation de ce mot-clé plus tard. En attendant il faut que vous sachiez que cette syntaxe est dépréciée et qu'il est conseillé d'utiliser celle avec les crochets.

###Récupérer et modifier des valeurs

Comment faire pour récupérer la valeur de l'index 1 de mon tableau ? Rien de plus simple, il suffit de spécifier l'index voulu, entre crochets, comme ceci :

```javascript
var myArray = ['Sébastien', 'Laurence', 'Ludovic', 'Pauline', 'Guillaume'];
 
alert(myArray[1]); // Affiche : « Laurence »
```

Sachant cela, il est facile de modifier le contenu d'un item du tableau :

```javascript
var myArray = ['Sébastien', 'Laurence', 'Ludovic', 'Pauline', 'Guillaume'];
 
myArray[1] = 'Clarisse';
 
alert(myArray[1]); // Affiche : « Clarisse »
```

####Mise en pratique