##Partie 10

###JSON: JavaScript Object Notation

exemple de notation JSON :

```html
<script>
    var data = { "firstName" : "Homer" };
    alert(data.firstName);
</script>
```

Le JSON permet aussi de stocker des tableaux :

```html
<div id="placeholder"></div>
<script>
var data={"users":[
        {
            "firstName":"Homer",
            "lastName":"Simpson",
            "joined":2012
        },
        {
            "firstName":"John",
            "lastName":"Jones",
            "joined":2010
        }
]}

document.getElementById("placeholder").innerHTML=data.users[0].firstName + " " + data.users[0].lastName+" "+ data.users[0].joined;
</script>
```

on peut parcourir notre objet afin d'ecrire dans la page html

```html
<div id="placeholder"></div>
<script>
    var data = { "users":[
            {
                "firstName":"Homer",
                "lastName":"Simpson",
                "joined": {
                    "month":"January",
                    "day":12,
                    "year":2012
                }
            },
            {
                "firstName":"John",
                "lastName":"Jones",
                "joined": {
                    "month":"April",
                    "day":28,
                    "year":2010
                }
            }
    ]}

    var output="<ul>";
    for (var i in data.users) {
        output+="<li>" + data.users[i].firstName + " " + data.users[i].lastName + "--" + data.users[i].joined.month+"</li>";
    }
    output+="</ul>";

    document.getElementById("placeholder").innerHTML=output;
</script>
```


####Mise en pratique
A partir du code suivant :
```html
<!DOCTYPE html>
<html>
<body>
<h2>JSON Object Creation in JavaScript</h2>

<p>
Name: <span id="jname"></span><br>  
Age: <span id="jage"></span><br> 
Address: <span id="jstreet"></span><br> 
Phone: <span id="jphone"></span><br> 
</p>  

<script>
 
</script>

</body>
</html>
```

Remplir les span avec les valeurs d'un objet.

###Fonctions anonymes

Le principal interêt d'un fonction anonyme est qu'elle va vous permettre d'isoler du code.

```javascript
// Code externe
 
(function() {
 
    // Code isolé
 
})();
 
// Code externe
```

exemple :

```javascript
var r = function() { 
    alert('Bonjour'); 
};

r();
```
ou si l'on veut que la fonction s'execute directement :

```javascript
var r = function() { 
    alert('Bonjour'); 
}();
```

On évite ainsi de poluer l'espace de nom global.

