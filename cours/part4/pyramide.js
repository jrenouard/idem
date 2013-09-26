var nbline;

nbline = prompt('Combien de lignes ?');

for(i = 0; i < nbline; i++) {
    var str =  '';
    for(j = 0; j < i+1; j++) {
        str += '*';
    }
    // console.log(str);
    document.write(str+'<br/>');
}