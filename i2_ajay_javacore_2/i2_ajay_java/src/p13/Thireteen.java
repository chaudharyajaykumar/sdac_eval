package p13;

class Seat{
	String color;
	int nseat;
	public Seat(String color, int nseat) {
		super();
		this.color = color;
		this.nseat = nseat;
	}
	@Override
	public String toString() {
		return "Seat [color=" + color + ", nseat=" + nseat + "]";
	}
}

class Engine{
	String ename;
	int stroke;
	public Engine(String ename, int stroke) {
		super();
		this.ename = ename;
		this.stroke = stroke;
	}
	@Override
	public String toString() {
		return "Engine [ename=" + ename + ", stroke=" + stroke + "]";
	}
}
public class Thireteen {
String crname;
Seat s;
Engine e;
public Thireteen(String crname, Seat s, Engine e) {
	super();
	this.crname = crname;
	this.s = s;
	this.e = e;
}
@Override
public String toString() {
	return "Thireteen [crname=" + crname + ", s=" + s + ", e=" + e + "]";
}

public static void main(String[] args) {
	Thireteen thireteen=new Thireteen("tata:alto", new Seat("red", 4), new Engine("BS4", 6));
	System.out.println(thireteen);
}
}
