function tempConvert(temp) {
    return (1.8 * temp) + 32;
}
var tempC = 100;
var tempF = tempConvert(tempC);
// edit the above line to convert different temperatures
console.log(tempC + " degrees Celsius equates to " + tempF + " degrees Fahrenheit.");