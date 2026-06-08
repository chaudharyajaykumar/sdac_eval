package p15;

public class Emp extends Manager{

	@Override
	public void add(int a, int b) {
		System.out.println(a+b);
		
	}

	@Override
	public void sub(int a, int b) {
		System.out.println(a-b);
		
	}

}
