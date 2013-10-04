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

#####toUpperCase
Retourne la valeur de chaîne appelant convertie en majuscules.

#####trim
Coupe les espaces du début et de fin de la chaîne.

###Mise en pratique

####Exercice 1: 
En utilisant les méthodes vues ci-dessus, ecrire une fonction de validation d'un champ email.
Les conditions de validations sont :
* Présence d'un @
* Présence d'au moins un .
* L'@ ne doit pas être le premier caractère
* Le dernier point doit être après l'@ et au minimum 2 caractères avant la fin

####Exercice 2: 
Compter le nombre de mots présents dans une textarea

####Exercice 3:
Détecter le plus long palindrome dans une chaine


###L'Objet date

####Syntaxe

```javascript
var today = new Date();
var birthday = new Date("December 17, 1995 03:24:00");
var birthday = new Date(1995,11,17);
var birthday = new Date(1995,11,17,3,24,0);
```

####Méthodes


#####now()
Retourne la date actuelle exprimée en millisecondes depuis le 1 Janvier 1970

#####getDate() 
Retourne le jour du mois

#####getDay() 
Retourne le jour de la semaine

#####getFullYear() 
Retourne l'année

#####getHours() 
Retourne l'heure

#####getMilliseconds() 
Retourne les millisecondes de la date

#####getMinutes() 
Retourne les minutes

#####getMonth() 
Retourne le numéro du mois.

#####getSeconds() 
Retourne les secondes

#####getTime() 
Retourne la date en millisecondes

#####getTimezoneOffset() 
Retourne le décalage horaire en minutes

#####getYear() 
Retourne l'année sur 2 chiffres

#####setDate() 
Affecte la date du mois

#####setFullYear() 
Affecte l'année de la date

#####setHours() 
Affecte les heures

#####setMilliseconds() 
Affecte les millisecondes de la date

#####setMinutes() 
Affecte les minutes

#####setMonth() 
Affecte le mois de la date

#####setSeconds() 
Affecte les secondes

#####setTime() 
Affecte la date en millisecondes

#####setYear() 
Affecte l'année de la date

#####toString()
Retourne la date en chaine de caractères

#####toGMTString() 
Retourne la date à l'heure GMT

#####toLocaleString() 
Retourne la date au format par défaut

####Mise en pratique
####Exercice 1 :
L'utilisateur saisie sa date de naissance dans un champ text, lui renvoyer son age.


####Exercice 2 :
Validation d'un formulaire complet.
Cas d'un formulaire d'inscription contenant les champs suivants :
* login (au moins 4 caractères)
* email
* mot de passe (au moins 8 caractères avec au moins un chiffre)
* confirmation du mot de passe
* 3 selects (jour/mois/année) pour date de naissance, on vérifie que l'utilisateur est majeur
* sexe (H/F) (obligatoire)
* téléphone (obligatoire et numerique)
* select Pays (US/EN/FR/ES) (obligatoire)
* checkbox "J'ai lu et j'accepte les CGV" -> il est obligatoire de checker cette box pour s'inscrire
