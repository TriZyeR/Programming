var messageGen = function() {
var forecastByHour = [32, 15, 19, 25, 21];


for (var i =0; i <= forecastByHour.length; i++) {
  var temp = forecastByHour[i];
  var message = "On the " + [i] + " hour the expected forcase is to be" + temp;
  var listItems = document.createElement("li");

    listItems.innerHTML = message
}

}
