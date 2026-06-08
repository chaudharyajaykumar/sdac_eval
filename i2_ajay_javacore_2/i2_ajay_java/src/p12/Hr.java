package p12;

class Company{
	 String name;
	 int id;
	double sal;

	public Company(String name, int id, double sal) {
		super();
		this.name = name;
		this.id = id;
		this.sal = sal;
	}

	@Override
	public String toString() {
		return "Company [name=" + name + ", id=" + id + ", sal=" + sal + "]";
	}
	
	void calSal(double tax,double amt) {
		System.out.println(amt-tax);
	}
}

public class Hr  extends Company {
 public Hr(String name, int id, double sal) {
		super(name, id, sal);
		// TODO Auto-generated constructor stub
	}

 @Override
void calSal(double tax, double amt) {
	 super.calSal(tax, amt);
	 System.out.println(super.name);
}
 
 public static void main(String[] args) {
	Hr hr=new Hr("ajay",1,2000);
	hr.calSal(20, 1000);
}
}
