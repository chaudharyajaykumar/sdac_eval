package p10;

class Company{
	void calSal(double tax,double amt) {
		System.out.println(amt-tax);
	}
}

public class Hr  extends Company {
 @Override
void calSal(double tax, double amt) {
	 System.out.println(amt-tax+100);
}
 
 public static void main(String[] args) {
	Hr hr=new Hr();
	hr.calSal(20, 1000);
}
}

