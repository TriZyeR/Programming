function selectionsort(array){
  for (let i = 0; i < array.length; i++) {
    let min = i;
    for (let j = i + 1; j < array.length; j++) {
      if (array[min] > array[j]){
        min = j;
      }
    }
    if (array[min] !== array[i]){
      [array[i],array[min]] = [array[min],array[i]];
    }
  }
  return array;
}

console.log(selectionsort([3,54,65,7,2,43,50,63,61,1,23,43]));
