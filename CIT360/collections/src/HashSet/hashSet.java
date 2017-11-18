package HashSet;

	import java.util.HashSet;  
	  
	public class hashSet {
	  
	    public static void main(String args[]){  
	  
	        HashSet<String> hashSet = new HashSet<String>();  
	  
	        hashSet.add("element1");  
	        hashSet.add("element2");  
	        System.out.println(hashSet);  
	  
	        hashSet.remove("element1");  
	        System.out.println(hashSet);  
	    }  
	}  
