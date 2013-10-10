<?php
mysql_connect('localhost', 'root', 'root');
mysql_select_db('test');
mysql_query("SET NAMES utf8");   
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
function validateForm() {
    // validation login
    var regex_login = /\w{4,}/gi;
    var login = document.getElementById('login').value;
    var val_login = regex_login.test(login);
    if(!val_login) {
        alert("invalid login");
        return false;        
    }

    // // validation email
    var email = document.forms["myForm"]["email"].value;
    var regex_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var val_email = regex_email.test(email);
    if (!val_email) {
        alert("Not a valid e-mail address");
        return false;
    }

    // validation mot de passe
    var mdp = document.getElementById('password').value;
    var regex_pass = /[a-zA-Z].*\d|\d.*[a-zA-Z]{8,}/;
    var val_mdp = regex_pass.test(mdp);
    var confmdp = document.getElementById('conf_pass').value;
    if(!val_mdp) {
        alert("password is invalid (min 8 char with one digit)");
        return false;
    }

    if(mdp !== confmdp) {
        alert("password does not match");
        return false;
    }

    var tmp = mdp.split("");
    var flagnum = false;
    for (var i = tmp.length - 1; i >= 0; i--) {
        // console.log(tmp[i]);
        if(!isNaN(tmp[i])) {
            flagnum = true;
        }
    }
    if(!flagnum) {
        alert("Password should contain at least one number");
        return false;
    }

    // validation de l'age 
    var day = document.getElementById('day').value;
    var month = document.getElementById('month').value;
    var year = document.getElementById('year').value;
    var bd  = new Date(year, month, day);
    var now = new Date();
    var dif =  now - bd;
    var age = dif / 31557600000;
    // console.log(age);
    if(isNaN(age) || age < 18) {
        alert('you must be over 18 to enter');
        return false;
    }

    // validation tel
    var tel = document.getElementById('tel').value;
    var regex_tel = /(\+)(\d{11})$/;
    var val_tel = regex_tel.test(tel);
    // console.log(val_tel);
    if(!val_tel) {
        alert("Invalid Phone number (eg. +33675757575");
        return false;
    } 


    // validation pays   
    var pays = document.getElementById('pays').value;
    if(!pays) {
        alert('You must select your country');
        return false;
    }

    // validation cgu
    var cgu = document.getElementById('cgu').checked;
    if(!cgu) {
        alert('You must accept!');
        return false;
    }    

    alert("ok");
    // on lance l'ajax
    var data = $("form").serialize();
    console.log(data);
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: "action=subscribe&"+data,
        dataType: 'json',
        success: function(res) {
            console.log(res);
        }
    });
    return false;
}

function getRegion(idPays) {
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: "action=get_region&id_pays="+idPays,
        success: function(res) {
            $('#region').html(res);
        }
    });
}

function getVille(idRegion) {
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: "action=get_ville&id_region="+idRegion,
        success: function(res) {
            $('#ville').html(res);
        }
    });
}

$(document).ready(function() {
    $('#pays').change(function() {
        getRegion($(this).val());
    });

    $('#region').change(function() {
        getVille($(this).val());
    });    
});
</script>
</head>

<body>
<form name="myForm" action="" onsubmit="return validateForm();return false;" method="post">
Login: <input type="text" name="login" id="login" value="homer"/><br/>
Email: <input type="text" name="email" id="email" value="homer@simpson.com"/><br/>
Mot de passe: <input type="password" name="password" id="password" value="testtest1"/><br/>
Confirmation mot de passe: <input type="password" name="conf_pass" id="conf_pass" value="testtest1"><br/>
Age: 
<select name="day" id="day">
    <option>Jour</option>
    <option value="1">1</option>
    <option value="2" selected>2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<select name="month" id="month">
    <option>mois</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4" selected>4</option>
    <option value="5">5</option>
</select>
<select name="year" id="year">
    <option>année</option>
    <option value="2000">2000</option>
    <option value="1983" selected>1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
</select><br/>
Sexe:
<input type="radio" name="sex" value="H" id="sexH" checked="checked" /> 
<input type="radio" name="sex" value="F" id="sexF" /> <br/>
Téléphone :
<input type="text" name="tel" id="tel" value="+33675757575" /><br/>

Pays :
<select name="pays" id="pays">
    <option value="">Pays</option>
    <?php
    $qpays = 'SELECT * FROM geo_countries ORDER BY country';
    $rpays = mysql_query($qpays) or die(mysql_error());
    while ($opays = mysql_fetch_object($rpays)) {
        echo "<option value='".$opays->id."'>".$opays->country."</option>";
    }
    ?>
</select>
Région :
<select name="region" id="region">
</select>
Ville :
<select name="ville" id="ville">
</select>
<br/>
J'ai lu et j'accepte les CGU :
<input type="checkbox" id="cgu" name="cgu" checked />
<br/>
<input type="submit" value="Submit">
</form>
</body>

</html>