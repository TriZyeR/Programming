function boubblesort(array) {
	for (let i = 0; i < array.length - 1; i++) {
			if (array[i] > array[i+1]) {
				[array[i], array[i+1]] = [array[i+1], array[i]];
		}
	}
	return array;
}

console.log(boubblesort([4,2,88,6,3,34,654,234,6,12,43,6,7547,1,435,6,87,534,4,654,1,546,7,567]));
