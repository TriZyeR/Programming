function generateArray(pocet,min,max){
  let pole = [];
  for (let i = 0;i < pocet; i++) {
    var promena = Math.floor(Math.random() * 10000)
    if (promena < max & promena > min) {
      pole.push(promena);
      }
    else{
    i--
  }
  }
  return pole
}



console.log(generateArray(30,1000,10000))
