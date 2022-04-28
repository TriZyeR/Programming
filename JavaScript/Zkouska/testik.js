var array = ["Lukas", "Dan", "David", "Honza", "Kuba", "Ondra", "Pepa", "Petr", "Karel","Mára", "Štěpán", "Matěj", "Leoš", "Sali"];
var group = 2;
var people = 4;
var g1 = [];
var g2 = [];
var g3 = [];
var g4 = [];
var g5 = [];
var temp = [];

for (var i = 0; i < array.length; i++) {
  var filter = Math.floor(Math.random() * (group) + 1);
  if (filter == 1 && g1.length < people) {
    g1.push(array[i]);
  } else if (filter == 1 && g1.length == people) {
    temp.push(array[i]);
  }
  if (filter == 2 && g2.length < people) {
    g2.push(array[i]);
  } else if (filter == 2 && g2.length == people) {
    temp.push(array[i]);
  }
  if (filter == 3 && g3.length < people) {
    g3.push(array[i]);
  } else if (filter == 3 && g3.length == people) {
    temp.push(array[i]);
  }
  if (filter == 4 && g4.length < people) {
    g4.push(array[i]);
  } else if (filter == 4 && g4.length == people) {
    temp.push(array[i]);
  }
  if (filter == 5 && g5.length < people) {
    g5.push(array[i]);
  } else if (filter == 5 && g5.length == people) {
    temp.push(array[i]);
  }
}

var templenght = temp.length;

if (temp[0] !== null) {
  for (var i = 0; i < templenght; i++) {
    if (g1.length < people && group > 0) {
      g1.push(temp[0]);
      temp.shift();
    } else if (g2.length < people && group > 1) {
      g2.push(temp[0]);
      temp.shift();
    } else if (g3.length < people && group > 2) {
      g3.push(temp[0]);
      temp.shift();
    } else if (g4.length < people && group > 3) {
      g4.push(temp[0]);
      temp.shift();
    } else if (g5.length < people && group > 4) {
      g5.push(temp[0]);
      temp.shift();
    }
  }
}

console.log(g1);
console.log(g2);
console.log(g3);
console.log(g4);
console.log(g5);
