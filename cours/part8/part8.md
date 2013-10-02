##Partie 8

###Méthodes de l'objet String

#####charAt
Retourne le caractère à l'index spécifié.

```javascript
var message="internet"
alert(message.charAt(1)) //alerts "n"
```

#####charCodeAt
Retourne un nombre indiquant la valeur Unicode du caractère à l'index donné.
```javascript
var message="internet"
alert(message.charCodeAt(1)) //alerts "110"
```

#####concat
Combine le texte de deux chaînes et retourne une nouvelle chaîne.
```javascript
var message="Bob"
var final=message.concat(" is a"," hopeless romantic.")

alert(final) //alerts "Bob is a hopeless romantic."
```

#####indexOf
Retourne l'index dans l'objet String appelé de la première occurence de la valeur sépcifiée, ou -1 si il n'est pas trouvé.
```javascript
var sentence="Hi, my name is George!"
if (sentence.indexOf("George")!=-1) {
    alert("George is in there!")
}
```

#####lastIndexOf
Retourne l'index dans l'objet Sting de la dernière occurrence  de la valeur spécifiée, ou -1 si il n'est pas trouvé.
```javascript
var text = "super";
alert(text.lastIndexOf('e'));
```

#####match
Utilisé pour faire correspondre une expression régulière à une chaîne.

#####replace
Utilisé pour trouver une correspondance entre une expression régulière et une chaîne, et de remplacer la chaîne correspondante avec une nouvelle sous-chaîne.

#####search
Exécute la recherche pour la correspondance entre une expression régulière et une chaîne spécifiée.

#####slice
Extrait une section de la chaîne et retourne une nouvelle chaîne.
```javascript
var text="excellent"
text.slice(0,4) //returns "exce"
text.slice(2,4) //returns "ce"
```

#####split
Divise un objet String en un tableau de chaînes en séparant la chaîne en sous-chaînes.
```javascript
var message="Welcome to JavaScript Kit"
var word=message.split("l") //word[0] contains "We", word[1] contains "come to JavaScript Kit"
```

#####substr
Retourne les caractères dans une chaîne commençant à la localisation spécifiée par le nombre de caractères spécifié.
```javascript
var text="excellent";
text.substr(0) //returns "excellent"
text.substr(2) //returns "cellent"
```

#####substring
Retoune les caractères dans la chaîne entre deux indexes dans la chaîne.
```javascript
var text="excellent"
text.substring(0,4) //returns "exce"
text.substring(2,4) //returns "ce"
```

#####toLowerCase
Retourne la valeur de chaîne appelant convertis en minuscules.
```javascript

```

#####toUpperCase
Retourne la valeur de chaîne appelant convertie en majuscules.
```javascript

```

#####trim
Coupe les espaces du début et de fin de la chaîne.
```javascript

```

