package p18;

public class Company {
int id;
static String cname="TCS";
public Company(int id) {
	super();
	this.id = id;
}
@Override
public String toString() {
	return "Company [id=" + id + "]";
}

void calSal(int amt) {
	int tax=20;
	System.out.println(amt-tax);
}

public static void main(String[] args) {
	Company company=new Company(10);
	System.out.println(company.id);
	company.calSal(1000);
	System.out.println(Company.cname);
}
}
