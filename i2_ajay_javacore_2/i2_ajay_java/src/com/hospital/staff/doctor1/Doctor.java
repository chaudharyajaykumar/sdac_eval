package com.hospital.staff.doctor1;

import com.hospital.staff.doctor.salary.Salary;

//direct 
//public class Doctor extends com.hospital.staff.doctor.salary.Salary {
//public static void main(String[] args) {
//	Doctor doctor=new Doctor();
//	doctor.calSal(1000, 100);
//}
//}


//by importing 
public class Doctor extends Salary {
public static void main(String[] args) {
	Doctor doctor=new Doctor();
	doctor.calSal(1000, 100);
}
}