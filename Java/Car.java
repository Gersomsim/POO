package Java;

public class Car {
  Integer id;
  String license;
  Driver driver;
  Integer passenger;

  public Car( String license, Driver driver ){
    this.license = license;
    this.driver = driver;
  }

  void printDataCar(){
    System.out.println("License: " + this.license + " Name Driver: " + this.driver.name);
  }
}
