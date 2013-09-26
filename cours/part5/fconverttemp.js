function tempConvert(temp) {
    return (1.8 * temp) + 32;
}
var tempC = 100;
var tempF = tempConvert(tempC);

console.log(tempC + " degrees Celsius equates to " + tempF + " degrees Fahrenheit.");