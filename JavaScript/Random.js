function generateArray(pocet, min, max){
  var pole = [];
  for (let i = 0; i < pocet; i++) {
    var vysledek = Math.floor(Math.random(vysledek) * 100000);
    if (vysledek > min & vysledek < max) {
      pole.push(vysledek);
    } else {
      i--;
    }
  }
  for (var i = 0; i < pole.length - 1; i++) {
    for (var j = 0; j < pole.length - 1 - i; j++) {
      if (pole[j] > pole[j + 1]) {
        [pole[j], pole[j+1]] = [pole[j+1], pole[j]];
      }
    }
  }
  return pole;
}

console.dir(generateArray(1000, 1, 3), {'maxArrayLength': null});
