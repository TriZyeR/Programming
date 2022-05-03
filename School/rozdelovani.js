function rozdelovani(x, y) {
  while (y !== 0) {
    var temp = y;
    y = x % y;
    x = temp;
  }
  return x;
}

console.log(rozdelovani(1200,52));
