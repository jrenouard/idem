var day = new Date().getDay();
console.log(day);
switch (day) {
case 0:
  x = "Sunday";
  break;
case 1:
  x = "Monday";
  break;
case 2:
  x = "Tuesday";
  break;
case 3:
  x = "Wednesday";
  break;
case 4:
  x = "Thursday";
  break;
case 5:
  x = "Friday";
  break;
case 6:
  x = "Saturday";
  break;
}

alert("Today it's "+x);