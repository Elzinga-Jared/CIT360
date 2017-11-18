package JUnit;

import static org.junit.Assert.*;

import org.junit.Test;

public class JUnittest {

    @Test
    public void testPrint() {
        System.out.println("print");
        
        JUnit instance = new JUnit(40);
        
        //assertEquals
        String expResult = "F";
        String result = instance.print();
        assertEquals(expResult, result);

        //assertEquals
        expResult = "D";
        instance.setScore(76);
        result = instance.print();
        assertEquals(expResult, result);

        //assertEquals
        expResult = "C";
        instance.setScore(81);
        result = instance.print();
        assertEquals(expResult, result);
        
        //assertEquals        
        expResult = "B";
        instance.setScore(88);
        result = instance.print();
        assertEquals(expResult, result);

        //assertEquals        
        expResult = "A";
        instance.setScore(95);
        result = instance.print();
        assertEquals(expResult, result);
        
        //assertNotEquals
        String unexpResult = "A";
        instance.setScore(80);
        result = instance.print();
        assertNotEquals(unexpResult, result);
        
        //assertNull
        String testString = null;
        assertNull(testString);
        
        //assertTrue
        Boolean bValue = true;
        assertTrue(bValue);
    }

    /*
      Test the getGrade method with using the assertEquals.
    */
    @Test
    public void testGetGrade() {
        System.out.println("getGrade");
        JUnit instance = new JUnit(40);
        
        int result = instance.getScore();
        assertEquals(50, result);
    }

    /*
      Test of setGrade method with using the class setGrade.
    */
    @Test
    public void testSetGrade() {
        System.out.println("setGrade");
        JUnit instance = new JUnit(40);
        instance.setScore(80);
    }
    
}