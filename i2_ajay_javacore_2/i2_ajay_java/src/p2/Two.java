package p2;

import java.util.Iterator;
import java.util.Properties;
import java.util.Set;

public class Two {
public static void main(String[] args) {
	Properties properties=new Properties();
	properties.setProperty("ajay", "ajay@222");
	properties.setProperty("jay", "jay@222");
	properties.setProperty("jaya", "jaya@222");
	
	Set s=properties.keySet();
	Iterator iterator=s.iterator();
	while (iterator.hasNext()) {
		String s1 = (String) iterator.next();
		System.out.println(s1+":"+properties.getProperty(s1, "not found"));
		
	}
	
	
	
}
}
