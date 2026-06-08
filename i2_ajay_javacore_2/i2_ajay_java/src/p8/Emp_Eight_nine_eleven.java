package p8;

import java.util.Objects;

public class Emp_Eight_nine_eleven implements Cloneable {
	String name;
	int id;
	double sal;

	public Emp_Eight_nine_eleven(String name, int id, double sal) {
		super();
		this.name = name;
		this.id = id;
		this.sal = sal;
	}

	@Override
	public String toString() {
		return "Emp [name=" + name + ", id=" + id + ", sal=" + sal + "]";
	}

	@Override
	protected Object clone() throws CloneNotSupportedException {
		// TODO Auto-generated method stub
		return super.clone();
	}

	@Override
	public int hashCode() {
		return Objects.hash(id, name, sal);
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Emp_Eight_nine_eleven other = (Emp_Eight_nine_eleven) obj;
		return id == other.id && Objects.equals(name, other.name)
				&& Double.doubleToLongBits(sal) == Double.doubleToLongBits(other.sal);
	}

	@Override
	protected void finalize() throws Throwable {
		// TODO Auto-generated method stub
		super.finalize();
		System.out.println("deelted...");
	}

	public static void main(String[] args) throws CloneNotSupportedException {

		// eight
		Emp_Eight_nine_eleven emp = new Emp_Eight_nine_eleven("ajay", 1, 1000);
		Emp_Eight_nine_eleven emp2 = (Emp_Eight_nine_eleven) emp.clone();
		System.out.println(emp2);

		// nine
		Emp_Eight_nine_eleven emp3 = new Emp_Eight_nine_eleven("ajay", 1, 1000);
		System.out.println(emp.equals(emp3));

		// eleven
		emp = null;
		System.gc();

	}
}
