function generator(){
  var random = Math.floor(Math.random() * (10000 - 1000 + 1))
  var final = (""+random).split("");
  return final;
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
      return number.join("");
    } else {
      var variable1 = randomazing();
      var variable2 = randomazing();
      if (variable1 !== variable2) {
        [number[variable1], number[variable2]] = [number[variable2], number[variable1]];
      }
    }
  }
}

console.log(sorting());
