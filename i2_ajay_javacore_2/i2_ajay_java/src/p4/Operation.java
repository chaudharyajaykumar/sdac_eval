package p4;

import java.util.List;

public interface Operation {
	void addEmp(List<Emp> e);

	void deleteEmp(int id);

	void updateEmp(int id, double sal);

	void search(int id);
}
