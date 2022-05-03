var pocet = 0;
var nejvic = 0;

function Euro(array) {
	for (let i = 0; i < array.length - 1; i++) {
		if (array[i] < array[i+1]) {
			pocet++
		} else {
		if (nejvic < pocet) {
			nejvic = pocet;
			pocet = 0;
			}
		}
	}
	return nejvic;
}

console.log(Euro([4,9,8,1,5,7,4,3]));
