package p16;

public class Main {
	public static void main(String[] args) {
		String a = "ajay";
		String b = "kumar";
		String c = "    jaya   ";
		String d = a;
		int n = 20;

		System.out.println(a.length());
		System.out.println(a.compareTo(d));
		System.out.println(c.trim());
		System.out.println(a.concat(b));
		System.out.println(String.valueOf(n) + 26);
		System.out.println(a.replace('a', 'w'));

	}
}
