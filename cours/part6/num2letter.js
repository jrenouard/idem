function num2Letters(number) {
 
    if (isNaN(number) || number < 0 || 999 < number) {
        return 'Veuillez entrer un nombre entier compris entre 0 et 999.';
    }
 
    var units2Letters = ['', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize', 'dix-sept', 'dix-huit', 'dix-neuf'],
        tens2Letters  = ['', 'dix', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'soixante', 'quatre-vingt', 'quatre-vingt'];
 
    var units    = number % 10,
        tens     = (number % 100 - units) / 10,
        hundreds = (number % 1000 - number % 100) / 100;
 
    var unitsOut, tensOut, hundredsOut;
 
 
    if (number === 0) {
 
        return 'zéro';
 
    } else {
 
        // Traitement des unités
        if(units === 1 && tens > 0 && tens !== 8) {
            unitsOut = 'et-'
        }else{
            unitsOut = '';
        }
        unitsOut += units2Letters[units];
 
        // Traitement des dizaines
        if (tens === 1 && units > 0) {
 
            tensOut = units2Letters[10 + units];
            unitsOut = '';
 
        } else if (tens === 7 || tens === 9) {
 
            tensOut = tens2Letters[tens] +'-';
            if(tens === 7 && units === 1) {
                tensOut += 'et-';
            }else{
                tensOut += '';
            }
            tensOut += units2Letters[10 + units];

            unitsOut = '';
 
        } else {
 
            tensOut = tens2Letters[tens];
 
        }
 
        if(units === 0 && tens === 8) {
            tensOut += 's';
        }
 
        // Traitement des centaines
        if(hundreds > 1) {
            hundredsOut = units2Letters[hundreds] + '-';
        }else{
            hundredsOut = '';
        }

        if(hundreds > 0) {
            hundredsOut += 'cent';
        }

        if(hundreds > 1 && tens == 0 && units == 0) {
            hundredsOut += 's';
        }
 
        // Retour du total
        var finalStr = hundredsOut;
        if(hundredsOut && tensOut) {
            finalStr += '-';
        }
        finalStr += tensOut;

        if (hundredsOut && unitsOut || tensOut && unitsOut) {
            finalStr += '-';
        }
        finalStr += unitsOut;
        return  finalStr;
    }
 
}
 

 
var userEntry;
 
while (userEntry = prompt('Indiquez le nombre à écrire en toutes lettres (entre 0 et 999) :')) {
 
    alert(num2Letters(parseInt(userEntry, 10)));
 
}