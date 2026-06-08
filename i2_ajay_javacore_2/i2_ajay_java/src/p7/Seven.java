package p7;

import java.io.IOException;

public class Seven {

	void checkAge(int age) throws IOException {
		if (age < 18) {
			throw new IOException();
		} else {
			System.out.println("valid age");
		}
	}
	
	void canRide(int age) throws IOException {
		checkAge(age);
	}

	public static void main(String[] args) {
       Seven seven=new Seven();
       try {
		seven.canRide(18);
	} catch (IOException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
	}
}
