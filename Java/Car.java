package Java;

public class Car {
  Integer id;
  String license;
  String driver;
  Integer passenger;

  void printDataCar(){
    System.out.println("License: " + this.license + " Driver: " + this.driver);
  }
}
