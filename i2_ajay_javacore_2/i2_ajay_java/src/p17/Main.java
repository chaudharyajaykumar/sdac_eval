package p17;

class DevTeam1{
	void doWork() {
		System.out.println("do work assigned by the manager");
	}
}
//single and heir
class TeamLead1 extends DevTeam1{
	@Override
	void doWork() {
		// TODO Auto-generated method stub
		super.doWork();
		System.out.println("assign work to member of tema1");
	}
}

class TeamLead2 extends DevTeam1{
	@Override
	void doWork() {
		// TODO Auto-generated method stub
		super.doWork();
		System.out.println("assign work to member of tema2");
	}
}

//multi
public class Main extends TeamLead1 {
@Override
void doWork() {
	// TODO Auto-generated method stub
	super.doWork();
	System.out.println("do the work given by teamlead1");
}
public static void main(String[] args) {
	Main main=new Main();
	main.doWork();
}
}
