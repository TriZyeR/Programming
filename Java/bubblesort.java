public class bubblesort {

  public static void main(String[] args) {
    int[] numbers = {23,51,11,6,90,76,93,58};
    System.out.print("Original sequencion: \n ");

    for (int i = 0; i < numbers.length; i++) {
      System.out.print(numbers[i] + ", ");
    }
    System.out.println();
    SortEm(numbers);
  }

  private static void SortEm(int[] ar) {
    int temp;
    for (int i = 0; i < ar.length - 1; i++) {
      for (int j = 0; j < ar.length; j++) {
        if (ar[j] > ar[j + 1]) {
          temp = ar[j];
          ar[j] = ar[j+1];
          ar[j+1] = temp;
        }
      }
    }

    System.out.print("After sort: \n ");
    for (int i = 0; i < ar.length; i++) {
      System.out.print(ar[i] + ", ");
    }
    System.out.println();
  }
}
