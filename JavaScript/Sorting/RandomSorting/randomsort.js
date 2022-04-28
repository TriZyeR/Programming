function generator(){
  var random = Math.floor(Math.random() * 10000)
  if (random < 1000 || random > 10000) {

    if (random < 1000 && random >= 100) {
      random = random * 10;
      var final = (""+random).split("");
      return final;

    } else if (random < 100 && random >= 10) {
      random = random * 100;
      var final = (""+random).split("");
      return final;

    } else if (random < 10) {
      random = random * 1000;
      var final = (""+random).split("");
      return final;
    }
  } else {
    var final = (""+random).split("");
    return final;
  }
}
function randomazing(){
  return Math.floor(Math.random() * (4 - 1 + 1))
}
function sorting(){
  let number = generator();
  let swapped = false;
  while (swapped == false) {
    if (number[0] >= number[1] && number[1] >= number[2] && number[2] >= number[3]) {
      swapped = true;
    } else {
      var variable1 = randomazing();
      var variable2 = randomazing();
      while (variable1 == variable2) {
        variable2 = randomazing();
      }
      [number[variable1], number[variable2]] = [number[variable2], number[variable1]];
    }
  }
  return number.join("");
}
console.log(sorting());
