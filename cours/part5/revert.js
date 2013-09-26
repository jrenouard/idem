function revert(string) {
    return string.split('').reverse().join('');
}

function revert2(string) {
    var str = '';
    for (var i = string.length - 1; i >= 0; i--) {
        str += string[i];
    }
    return str;
}


console.log(revert2('ma super chaine'));