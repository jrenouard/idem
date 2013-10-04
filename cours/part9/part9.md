##Partie 9

###Les expressions régulières

###L'objet RegExp

La création d'un objet RegExp se crée à l'aide d'une simple expression comme suit : 

```
Expression = /motif/drapeau
```




Il est également possible de créer un tel objet de manière plus classique à l'aide de son constructeur : 

```
Expression = new RegExp("motif","drapeau")
```



Le motif représente l'expression régulière en elle-même tandis que le drapeau (optionnel) permet de préciser le comportement de l'expression régulière :

```
g 
```
indique une recherche globale sur la chaîne de caractère et indique une recherche de toutes les occurences.

```
i 
```
indique une recherche non sensible à la casse, c'est-à-dire que la recherche se fait indépendamment de l'écriture en majuscule ou minuscule de la chaîne.

```
gi 
```
combine les deux comportements précédents.

###Construire une expression régulière

Les expressions régulières permettent de rechercher des occurrences (c'est-à-dire une suite de caractères correspondant à ce que l'on recherche) grâce à une série de caractères spéciaux. L'expression régulière en elle-même est donc une chaîne de caractère contenant des caractères spéciaux et des caractères standards. 


####Début et fin de chaîne

Les symboles ```^``` et ```$``` indiquent respectivement le début et la fin d'une chaîne, et permettent donc de la délimiter. 

```^debut```: chaîne qui commence par ```debut```

```fin$```: chaîne qui se termine par ```fin```

```^chaîne$```: chaîne qui commence et se termine par ```chaîne```

```abc```: chaîne contenant la chaîne ```abc```

####Nombre d'occurences

Les symboles *, + et ?, signifient respectivement "zéro ou plusieurs", "au moins un", "un ou aucun", et permettent de donner une notion de quantité. 

```abc+```: chaîne qui contient ```ab``` suivie de un ou plusieurs ```c``` (```abc```, ```abcc```, etc.)
```abc*```: chaîne qui contient ```ab``` suivie de zéro ou plusieurs ```c``` (```ab```, ```abc```, etc.)
```abc?```: chaîne qui contient ```ab``` suivie de zéro ou un ```c``` (```ab``` ou ```abc``` uniquement)
```^abc+```: chaîne commençant par ```ab``` suivie de un ou plusieurs ```c``` (```abc```, ```abcc```, etc.)



Les accolades {X,Y} permettent de donner des limites précises de nombre d'occurences. 

```abc{2}```: chaîne qui contient ```ab``` suivie de deux ```c``` (```abcc```)
```abc{2,}```: chaîne qui contient ```ab``` suivie de deux ```c``` ou plus (```abcc``` etc..)
```abc{2,4}```: chaîne qui contient ```ab``` suivie 2, 3 ou 4 ```c``` (```abcc``` .. ```abcccc```)

Il est à noter que le premier nombre de la limite est obligatoire ("{0,2}", mais pas "{,2}"). Les symboles vu précedemment ('*', '+', et '?') sont équivalents à "{0,}", "{1,}", et "{0,1}". 

####Parenthèses capturantes

Les parenthèses ( ) permettent de représenter une séquence de caractères et de capturer le résultat. Les occurences correspondant au motif entre parenthèses sont accessibles via la méthode exec() de l'objet RegExp ou bien les méthodes search(), match() et replace() de l'objet String. 

```a(bc)+```: chaîne qui contient ```a``` suivie de au moins
une occurence de la chaîne ```bc```

La barre verticale | se comporte en tant qu'opérateur OU 

```(un|le)```: chaîne qui contient ```un``` ou ```le```

```(un|le) chien```: chaîne qui correspond à
 ```un chien``` ou ```le chien```

idem\.((net)|(com)|(org)) :
chaîne qui correspond à  :
```idem.net```
```idem.com```
```idem.org```

####Caractère quelconque

Le point (.) indique n'importe une occurence de n'importe quel caractère. 

```^.{3}$```: chaîne qui contient 3 caractères
```.*```: Tous les caractères

#####Liste de caractères

Les crochets [ ] définissent une liste de caractères autorisés (ou interdits). Le signe - permet quand à lui de définir un intervalle. Le caractère ^ après le premier crochet indique quand à lui une interdiction. 

```[abc]```: chaîne qui contient un ```a```, un ```b```, ou un ```c```.
```[a-z]```: chaîne qui contient un caractère compris entre ```a``` et ```z```.
```[^a-zA-Z]```: chaîne qui ne commence pas par une lettre.

En effet entre crochets, chaque caractère représente ce qu'il est. Pour représenter un ] il faut le mettre en premier (ou après un ^ si c'est une interdiction). Etant donné que le signe - sert à définir un intervalle, il est nécessaire de commencer ou de terminer par ce caractère lorsque l'on veut indiquer qu'il fait partie des caractères autorisés : 
```[-ag]```: chaîne qui contient un moins (-), un ```a```, ou un ```g```
```[a-g]```: chaîne qui contient un caractère compris entre ```a``` et ```g```
```[\+?{}.]```: chaîne qui contient un de ces six caractères
```[]-]```: chaîne qui contient le caractère ```]``` ou le caractère ```-```

####Caractères spéciaux

Il existe enfin des caractères spéciaux (précédés d'une barre oblique inverse) représentant des types de caractères spécifiques : 


|Caractère spécial  | Utilité |
|-------------------|---------|
|\b | Permet de capturer une coupure de mot, c'est-à-dire des caractères situés au tout début ou à la fin d'un mot. Par exemple "he\b" permet de capturer "CommentCaMarche" mais pas "chenil". De la même façon "\bCo" permet de capturer "CommentCaMarche" mais pas "DéCor". |
|\B  |  Permet de capturer les caractères non précédés ou suivis d'une coupure de mot, c'est-à-dire des caractères situés au milieu d'un mot. Par exemple "ment\B" permet de capturer "CommentCaMarche" mais pas "Comment Ca Marche". |
|\c | Caractère Permet de capturer un caractère de contrôle (correspondant à la combinaison Ctrl+Caractère. Par exemple "\cC" permet de capturer la séquence Ctrl+c. |
|\d |  Permet de capturer un caractère numérique. \d est ainsi équivalent à [0-9]. |
|\f |  Permet de capturer un saut de page. |
|\n |  Permet de capturer un saut de ligne. |
|\r |  Permet de capturer un retour chariot. |
|\s |  Permet de capturer un "caractère blanc" (espace, retour chariot, tabulation, saut de ligne, saut de page). |
|\S |  Permet de capturer un "caractère non blanc" (tous les caractères sauf espace, retour chariot, tabulation, saut de ligne, saut de page). |
|\t |  Permet de capturer une tabulation horizontale. |
|\v |  Permet de capturer une tabulation verticale. |
|\w |  Permet de capturer un caractère alphanumérique (y compris le caractère _). \w est ainsi équivalent à [a-zA-Z0-9_]. |
|\W |  Permet de capturer un caractère non alphanumérique. \W est ainsi équivalent à [^a-zA-Z0-9_]. |
|\o | Nombre    Permet de capturer un nombre en base octale (base 8). |
|\x |Nombre |    Permet de capturer un nombre en base hexadécimale (base 16).|

####Tableau récapitulatif

Voici un tableau récapitulatif des caractères spéciaux utilisés dans les expressions régulières : 

|Caractère |   Utilité|
|----------|----------|
|\ |   Le caractère antislash représente lui-même ou le caractère spécial qui le suit. |
|[] |  Les crochets définissent une liste de caractères. |
|() |  Les parenthèses définissent un élément composé de l'expression régulière qu'elle contient. |
|{} |  Les accolades lorsqu'elles contiennent un ou plusieurs chiffres séparés par des virgules représentent le nombre d'occurences de l'élément les précédant (par exemple p{2,5} correspond à ppp, pppp ou ppppp |
|- |   Un moins entre deux caractères dans une liste représente un intervalle (par exemple [a-d] représente [abcd]). |
|. |   Le caractère point représente un caractère quelconque. |
|* |   Le caractère astérisque indique un nombre d'occurences indéterminé (y compris aucune) de l'élément le précédant.|
|+ |   Le caractère plus indique une ou plusieurs occurences de l'élément le précédant. |
|? |  Le caractère "point d'interrogation" indique une occurence éventuelle (0 ou 1) de l'élément le précédant.
lard>cochon) |
|^ | Placé en début d'expression il signifie "chaîne commençant par .. " 
Utilisé entre crochet, immédiatement après le crochet ouvrant, il signifie "ne contenant pas les caractères suivants... |
|[abc] |   Permet de rechercher les caractères compris entre les crochets. |
|[^abc] |  Permet de rechercher tous les caractères sauf ceux compris entre les crochets. |
| $ |   Placé en fin d'expression il signifie "chaîne finissant par ... "|


####Les méthodes de l'objet RegExp

Les méthodes de l'objet RegExp permettent d'appliquer l'expression régulière à une chaîne de caractères. 

Le tableau suivant décrit les méthodes de l'objet RegExp : 

| Méthode | Description |
|---------|-------------|
|Expression.compile("chaine"); |   Permet de redéfinir une nouvelle expression régulière. |
| Expression.exec("chaine");  | Effectue une recherche sur la chaîne de caractère avec l'expression régulière définie. Cette méthode retourne un tableau contenant les occurences trouvées. |
| Expression.test("chaine"); |  Teste une chaîne de caractère avec l'expression régulière. Cette méthode retourne True si la recherche est fructueuse, false dans le cas contraire. |
