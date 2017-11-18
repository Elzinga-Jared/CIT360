package TreeSet;
	
	import java.util.TreeSet;  
	  
	public class TreeSet {  
	  
	    public static void main(String args[]){  
	  
	        TreeSet<String> treeSet = new TreeSet<String>();  
	  
	        treeSet.add("element1");  
	        treeSet.add("element2");  
	        treeSet.add("element3");  
	        System.out.println(treeSet);  
	  
	        treeSet.remove("element2");  
	        System.out.println(treeSet);  
	    }      
	}  

