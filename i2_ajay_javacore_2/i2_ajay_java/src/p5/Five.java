package p5;

public class Five {
	static private String cname = "TCS";
	
	static class Company{
		static void compDetail() {
			System.out.println(cname);
		}
	}
	
	public static void main(String[] args) {
		Five.Company.compDetail();
	}

}
