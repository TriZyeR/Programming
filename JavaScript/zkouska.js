function pocetDlouhychSlov(veta) {
  let vetaArr = veta.split(" ");
  let pocetSlov = 0;
  for (let x of vetaArr) {
    if (x.length > 2) {
      pocetSlov++;
    }
  }
  return pocetSlov;
}

let vstup = "Podle mě je to korupce až do roztrhání těla, řekl ve Sněmovně šéf Pirátů Ivan Bartoš ke kauze Pandora Papers.";

console.log(pocetDlouhychSlov(vstup));
