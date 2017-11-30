package threadsExecutorsRunnables;

	public class MyThread implements Runnable {

		    private String myName;
		    private int count;
		    private final long sleep;
		
		    MyThread(String name, int newcount, long newSleep) {
		        this.myName = name;
		        this.count = newcount;
		        this.sleep = newSleep;
		    }
		    @Override
		    public void run() {
		        int sum = 0;
		        for (int i = 1; i <= this.count; i++) {
		            sum = sum + i;
		        }
		        System.out.println(myName + " thread = " + sum +
		                " sleeps for " + sleep);
		        try {
		            Thread.sleep(this.sleep);
		        } catch (InterruptedException e) {
		            e.printStackTrace();
		   }
	 }
}