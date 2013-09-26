##Partie 1 : Les bases du Javascript


### Qu'est ce que le javascript ?

Le Javascript est à ce jour utilisé majoritairement sur Internet, conjointement avec les pages Web (HTML ou XHTML). Le Javascript s'inclut directement dans la page Web (ou dans un fichier externe) et permet de dynamiser une page HTML, en ajoutant des interactions avec l'utilisateur, des animations, de l'aide à la navigation, comme par exemple :

Afficher/masquer du texte ;

Faire défiler des images ;

Créer un diaporama avec un aperçu « en grand » des images ;

Créer des infobulles.

Le Javascript est un langage dit client-side, c'est-à-dire que les scripts sont exécutés par le navigateur chez l'internaute (le client). Cela diffère des langages de scripts dits server-side qui sont exécutés par le serveur Web. C'est le cas des langages comme le PHP.

C'est important, car la finalité des scripts client-side et server-side n'est pas la même. Un script server-side va s'occuper de « créer » la page Web qui sera envoyée au navigateur. Ce dernier va alors afficher la page puis exécuter les scripts client-side tel que le Javascript. Voici un schéma reprenant ce fonctionnement :

![image](292939.png)

Javascript est un langage dit client-side, c'est à dire interprété par le client (le visiteur)

###Le Hello World!

Comme dans tout bon tutoriel nous allons commencer par afficher le classique 'Hello World!'

La syntaxe pour afficher cette boîte de dialogue est très simple :

```javascript
alert('Hello World!');
```

A noter que la fonction alert() est maitenant de moins en moins utilisée pour le debugage, on lui préférera l'utilisation de la console disponible dans les navigateurs récents.

```javascript
console.log('Hello World!');
```

Mise en pratique, à partir du [code source](part1.html) fournis, essayez les 2 méthodes.


### La syntaxe

La syntaxe du Javascript n'est pas compliquée. De manière générale, les instructions doivent être séparées par un point-virgule que l'on place à la fin de chaque instruction :

```javascript
instruction_1;
instruction_2;
instruction_3;
```

##### La compression des scripts

Certains scripts sont disponibles sous une forme dite compressée, c'est-à-dire que tout le code est écrit à la suite, sans retours à la ligne.

Cela permet d'alléger considérablement le poids d'un script et ainsi de faire en sorte que la page soit chargée plus rapidement. 

Des programmes existent pour « compresser » un code Javascript. 
Mais si vous avez oublié un seul point-virgule, votre code compressé ne fonctionnera plus, puisque les instructions ne seront pas correctement séparées. 

C'est aussi une des raisons qui fait qu'il faut toujours mettre les points-virgules en fin d'instruction.

#####Les espaces

Le Javascript n'est pas sensible aux espaces.
Cela veut dire que vous pouvez aligner des instructions comme vous le voulez, sans que cela ne gêne en rien l'exécution du script.

Par exemple :

```javascript
instruction_1;
    instruction_1_1;
    instruction_1_2;
instruction_2;     instruction_3;
```

######Indentation et présentation

L'indentation, en informatique, est une façon de structurer du code pour le rendre plus lisible.

Les instructions sont hiérarchisées en plusieurs niveaux et on utilise des espaces ou des tabulations pour les décaler vers la droite et ainsi créer une hiérarchie.

Voici un exemple de code indenté :

```javascript
function toggle(elemID) {
    var elem = document.getElementById(elemID);
    if (elem.style.display == 'block') {
        elem.style.display = 'none';    
    } else {
        elem.style.display = 'block';   
    }
}
```

Ce code est indenté de quatre espaces, c'est-à-dire que le décalage est chaque fois un multiple de quatre.

Un décalage de quatre espaces est courant, tout comme un décalage de deux. 
Il est possible d'utiliser des tabulations pour indenter du code.
Les tabulations présentent l'avantage d'être affichées différemment suivant l'éditeur utilisé, et de cette façon, si vous donnez votre code à quelqu'un, l'indentation qu'il verra dépendra de son éditeur et il ne sera pas perturbé par une indentation qu'il n'apprécie pas.

Voici le même code, mais non indenté, pour vous montrer que l'indentation est une aide à la lecture :

```javascript
function toggle(elemID) {
var elem = document.getElementById(elemID);

if (elem.style.display == 'block') {
elem.style.display = 'none';    
} else {
elem.style.display = 'block';   
}
}
```
La présentation des codes est importante aussi, un peu comme si vous rédigiez une lettre : ça ne se fait pas n'importe comment. Il n'y a pas de règles prédéfinies comme pour l'écriture des lettres, donc il faudra vous arranger pour organiser votre code de façon claire. Dans le code indenté donné précédemment, vous pouvez voir qu'il y a des espaces un peu partout pour aérer le code et qu'il y a une seule instruction par ligne (à l'exception des if else, mais nous verrons cela plus tard). Certains développeurs écrivent leur code comme ça :

```javascript
function toggle(elemID){
    var elem=document.getElementById(elemID);   
    if(elem.style.display=='block'){
        elem.style.display='none';  
    }else{elem.style.display='block';}
}
```

Vous conviendrez que c'est tout de suite moins lisible non ? 

Gardez à l'esprit que votre code doit être propre, même si vous êtes le seul à y toucher : vous pouvez laisser le code de côté quelques temps et le reprendre par la suite, et là, bonne chance pour vous y retrouver.

######Les commentaires

Les commentaires sont des annotations faites par le développeur pour expliquer le fonctionnement d'un script, d'une instruction ou même d'un groupe d'instructions. Les commentaires ne gênent pas l'exécution d'un script.

Il existe deux types de commentaires : les commentaires, et les commentaires multilignes.

######Commentaires

Ils servent à commenter une instruction. Un tel commentaire commence par deux slashs :

```javascript
instruction_1; // Ceci est ma première instruction
instruction_2;
// La troisième instruction ci-dessous :
instruction_3;
```

Le texte placé dans un commentaire est ignoré lors de l'exécution du script, ce qui veut dire que vous pouvez mettre ce que bon vous semble en commentaire, même une instruction (qui ne sera évidemment pas exécutée) :

```javascript
instruction_1; // Ceci est ma première instruction
instruction_2;
// La troisième instruction ci-dessous pose problème, je l'annule temporairement
// instruction_3;
```

######Commentaires multilignes

Ce type de commentaires permet les retours à la ligne. Un commentaire multiligne commence par /* et se termine par */ :

```javascript
/* Ce script comporte 3 instructions :
      - Instruction 1 qui fait telle chose
      - Instruction 2 qui fait autre chose
      - Instruction 3 qui termine le script
*/
instruction_1;
instruction_2;
instruction_3; // Fin du script
```

Remarquez qu'un commentaire multiligne peut aussi être affiché sur une seule ligne :

```javascript
instruction_1; /* Ceci est ma première instruction */
instruction_2;
```
