package p19;

public class Ninten {
	void compDetail() {
		final String cname = "tcs";
		class AffilateCompany {
			void compDetail() {
				System.out.println(cname);
			}
		}

		AffilateCompany company = new AffilateCompany();
		company.compDetail();
	}

	public static void main(String[] args) {
		Ninten ninten = new Ninten();
		ninten.compDetail();
	}

}
