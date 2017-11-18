package HashMap;

	import java.util.HashMap;  
	  
	public class HashMap {  
	  
	    public static void main(String args[]){  
	  
	    HashMap<Integer, String> hashMap = new HashMap<Integer, String>();  
	  
	    hashMap.put(0,"value1");  
	    hashMap.put(1,"value2");  
	    hashMap.put(2,"value3");  
	    System.out.println(hashMap);  
	  
	    hashMap.remove(0);  
	    System.out.println(hashMap);  
	    }  
	}  
