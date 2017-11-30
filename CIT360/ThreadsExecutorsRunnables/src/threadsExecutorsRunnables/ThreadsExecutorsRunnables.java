package threadsExecutorsRunnables;

	import java.util.concurrent.ExecutionException;
	import java.util.concurrent.ExecutorService;
	import java.util.concurrent.Executors;
	import java.util.concurrent.Future;
	import java.util.concurrent.TimeUnit;
	
	public class ThreadsExecutorsRunnables {
	    private static Future taskTwo = null;
	    private static Future taskThree = null;
	    public static void main(String[] args) throws InterruptedException, ExecutionException {
	        ExecutorService executor = Executors.newFixedThreadPool(2);

// execute the Runnable
	        Runnable taskOne = new MyThread("TaskOne", 7, 800);
	        executor.execute(taskOne);
	        for(int i = 0; i < 2; i++) {

	            if ((taskTwo == null) || (taskTwo.isDone()) || (taskTwo.isCancelled())) {
	                taskTwo = executor.submit(new MyThread("TaskTwo", 6, 400));
	            }
	            if ((taskThree == null) || (taskThree.isDone()) || (taskThree.isCancelled())) {
	                taskThree = executor.submit(new MyThread("TaskThree", 3, 200));
	            }
	            if(taskTwo.get() == null) {
	                System.out.println(i+1 + ") TaskTwo success!");
	            } else {
	                taskTwo.cancel(true);
	            }
	            if(taskThree.get() == null) {
	                System.out.println(i+1 + ") TaskThree success!");
	            } else {
	                taskThree.cancel(true);
	            }
	        }
	        executor.shutdown();
	        System.out.println("=====================");

	        executor.awaitTermination(1, TimeUnit.SECONDS);
	        System.out.println("Finished!");
	    }
	}

