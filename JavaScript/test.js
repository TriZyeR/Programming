function cenzura(array,number){
  for (var i = 1; i < array.length; i++) {
    if (array[i] >= number) {
      array[i] = "*";
    }
  }
  return array;
}

console.log(cenzura([1,2,3,4,5,6,7,8,9], 5));
