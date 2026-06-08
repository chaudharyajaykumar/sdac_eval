package p4;

import java.util.Enumeration;
import java.util.Iterator;
import java.util.List;
import java.util.Vector;

public class OperationImpl implements Operation {
	Vector<Emp> db = new Vector<Emp>();

	@Override
	public void addEmp(List<Emp> e) {
		db.addAll(e);
		System.out.println("inseted");

	}

	@Override
	public void deleteEmp(int id) {
		Iterator<Emp> iterator = db.iterator();
		while (iterator.hasNext()) {
			Emp emp = (Emp) iterator.next();
			if (emp.id == id) {
				iterator.remove();
				System.out.println("deleted...");
				break;
			}
		}

	}

	@Override
	public void updateEmp(int id, double sal) {
		Iterator<Emp> iterator = db.iterator();
		while (iterator.hasNext()) {
			Emp emp = (Emp) iterator.next();
			if (emp.id == id) {
				emp.sal = sal;
				System.out.println("updated...");
				break;
			}
		}

	}

	@Override
	public void search(int id) {
		Enumeration<Emp> enumeration = db.elements();
		while (enumeration.hasMoreElements()) {
			Emp emp = (Emp) enumeration.nextElement();
			if (emp.id == id) {
				System.out.println(emp);
				System.out.println("updated...");
				break;
			}

		}
	}

}
