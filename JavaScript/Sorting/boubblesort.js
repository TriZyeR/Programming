function boubblesort(array) {
	for (let i = 0; i < array.length - 1; i++) {
			for (let j = 0; j < array.length - 1 - i; j++) {
				if (array[j] > array[j+1]) {
					[array[j], array[j+1]] = [array[j+1], array[j]];
			}
		}
	}
	return array;
}

console.log(boubblesort([4,2,88,6,3,34,654,234,6,12,43,6,7547,1,435,6,87,534,4,654,1,546,7,567]));
