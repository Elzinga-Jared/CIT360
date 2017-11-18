package collections;
 
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;
 
public class CollectionsAddAll {
 
    public static void main(String a[]){
 //AddAll of the Dwarfs      
        List<String> myList = new ArrayList<String>();
        myList.add("Happy");
        myList.add("Sleepy");
        myList.add("Doc");
        System.out.println("List of Dwarfs:"+myList);
        Collections.addAll(myList, "Bashful","Sneezy");
        System.out.println("Adding more Dwarfs:"+myList);
        String[] strArr = {"Grumpy", "Dopey"};
        Collections.addAll(myList, strArr);
        System.out.println("The complete list of Dwarfs:"+myList);
        System.out.println();
//Sorting the letters of the day      
        List<String> listStrings = new ArrayList<String>();
        listStrings.add("O");
        listStrings.add("N");
        listStrings.add("P");
        listStrings.add("M");
        listStrings.add("L");
        System.out.println("Before sorting: " + listStrings);
        Collections.sort(listStrings);
        System.out.println("After sorting: " + listStrings);
        System.out.println();
//Shuffle some numbers      
        List<Integer> numbers = new ArrayList<Integer>();
        for (int i = 0; i <= 10; i++) numbers.add(i);
        System.out.println("Shuffled: " + numbers);
        Collections.shuffle(numbers);
        System.out.println("Not shuffled: " + numbers);
        System.out.println();
 //Family Sublist       
        List<String> listNames = Arrays.asList("Jared", "Tanya", "Kendra", "Spencer", "Peyton", "Pepper");
        System.out.println("Family: " + listNames);
        List<String> subList = listNames.subList(2, 5);
        System.out.println("Kids: " + subList);
    }
}