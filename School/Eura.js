var pocet = 0;
var nejvic = 0;

function Euro(array) {
	for (let i = 0; i < array.length - 1; i++) {
		if (array[i] < array[i+1]) {
			pocet++
		}
		if (nejvic < pocet) {
			nejvic = pocet;
		}
		if (nejvic > pocet) {
			pocet = 0;
		}
	}
	return pocet;
}

console.log(Euro([23,24,25,26,4,2,1]));
