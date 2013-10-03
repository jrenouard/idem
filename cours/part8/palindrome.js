function isPalindrome(str) {
    str = str.toLowerCase();
    var rev = str.split("").reverse().join("");
    if(str == rev) {
        return true;
    }else{
        return false;
    }
}

function longestPalindrome(str) {
    var tmp = str.split(" ");

    var length = tmp.length,
        element = null,
        word = "",
        max = 0;
    for (var i = 0; i < length; i++) {
        element = tmp[i];
        if(isPalindrome(element) && element.length > max) {
            // console.log(element+" "+element.length);
            max = element.length;
            word = element;
        }
    }
    var ret = {};
    ret.max = max;
    ret.word = word;
    return ret;
}

// var res = isPalindrome('toto');
// console.log(res);

var res = longestPalindrome("totot fait du ski");
console.log(res);

var res = longestPalindrome(smalltext);
console.log(res);