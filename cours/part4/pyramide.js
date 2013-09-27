var nbline;

nbline = prompt('Combien de lignes ?');
var str =  '';
for(i = 0; i < nbline; i++) {
    str+='*';
    // console.log(str);
    document.write(str+'<br/>');
}