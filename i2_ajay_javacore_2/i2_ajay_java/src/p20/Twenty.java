package p20;

class AffilateCompany {
	void report() {

	}
}

public class Twenty {
	void viewReport(AffilateCompany a) {
		a.report();
	}
	
	public static void main(String[] args) {
		Twenty twenty=new Twenty();
		twenty.viewReport(new AffilateCompany() {
			@Override
			void report() {
				// TODO Auto-generated method stub
				super.report();
				System.out.println("pass class as a prameter");
			}
		});
	}
}

