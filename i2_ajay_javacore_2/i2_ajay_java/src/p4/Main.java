package p4;

import java.util.Vector;

public class Main {
public static void main(String[] args) {
	Vector<Emp> v = new Vector<Emp>();
	v.add(new Emp("ajay", 1, 1000));
	v.add(new Emp("jay", 2, 1500));
	v.add(new Emp("jaya", 3, 2000));
	
	
	OperationImpl impl=new OperationImpl();
	impl.addEmp(v);System.out.println();
	impl.deleteEmp(1);System.out.println();
	impl.updateEmp(2, 2000);System.out.println();
	impl.search(2);
	
}
}

