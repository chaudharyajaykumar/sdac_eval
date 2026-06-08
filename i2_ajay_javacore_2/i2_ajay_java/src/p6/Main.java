package p6;

import java.util.Collections;
import java.util.Iterator;
import java.util.List;
import java.util.Vector;

//six also done here

public class Main {
	public static void main(String[] args) {
		List<Emp> v = new Vector<Emp>();
		v.add(new Emp("ajay", 1, 1000));
		v.add(new Emp("jay", 2, 1500));
		v.add(new Emp("jaya", 3, 2000));

		Iterator<Emp> iterator = v.iterator();
		while (iterator.hasNext()) {
			Emp emp = (Emp) iterator.next();
			System.out.println(emp);
		}

		Collections.sort(v);
		Iterator<Emp> iterator2 = v.iterator();
		for (Emp emp : v) {
			System.out.println(emp);
		}

	}
}
