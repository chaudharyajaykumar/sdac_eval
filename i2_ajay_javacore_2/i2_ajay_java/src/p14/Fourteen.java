package p14;

public class Fourteen {
public static void main(String[] args) {
	try {
		int[] a=new int[3];
		a[3]=10/0;
	} 
	catch (ArithmeticException e) {
		System.out.println(e);
	}
	catch (ArrayIndexOutOfBoundsException e) {
		System.out.println(e);
	}catch (Exception e) {
		System.out.println(e);
	}
}
}
