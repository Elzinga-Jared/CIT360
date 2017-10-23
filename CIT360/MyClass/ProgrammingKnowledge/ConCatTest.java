package ProgrammingKnowledge;

import static org.junit.Assert.*;

import org.junit.Test;

public class ConCatTest {

	@Test
	public void ConCatTest() {
		MyJUnitClass junit = new MyJUnitClass();
		String result = junit.ConCat("Hello ", "World");
		assertSame("Hello ", "World");
	}

}
