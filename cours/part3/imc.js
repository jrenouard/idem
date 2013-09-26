var nom, prenom, taille, poids, imc;
 
// nom     = prompt('Entrez votre nom :');
// prenom  = prompt('Entrez vore prénom :');
taille  = prompt('Entrez votre taille :');
poids   = prompt('Entrez votre poids :');
imc     = poids/(taille*taille);
// result  = "Bonjour "+prenom+" "+nom+", votre IMC est de "+imc;

console.log(imc);
if(imc < 18.5) {
    result = 'Vous devriez manger un peu plus';
}else if(imc > 25) {
    result = 'Attention au surpoids';
}else{
    result = 'Bravo, votre IMC est idéal';
}

alert(result);