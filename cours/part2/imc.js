var nom, prenom, taille, poids, imc;
 
nom     = prompt('Entrez votre nom :');
prenom  = prompt('Entrez vore prénom :');
taille  = prompt('Entrez votre taille :');
poids   = prompt('Entrez votre poids :');
imc     = poids/(taille*taille);
result  = "Bonjour "+prenom+" "+nom+", votre IMC est de "+imc;
 
alert(result);