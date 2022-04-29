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
	return nejvic;
}

console.log(Euro([23,24,25,26,27,4,2,1,2,3,4,5,6,7]));
