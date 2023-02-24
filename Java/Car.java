package Java;

public class Car {
  Integer id;
  String license;
  Driver driver;
  private Integer passenger;

  public Car( String license, Driver driver ){
    this.license = license;
    this.driver = driver;
  }
  public Integer getPassenger() {
    return passenger;
  }
  public void setPassenger(Integer passenger) {
    this.passenger = passenger;
  }

  void printDataCar(){
    System.out.println("License: " + this.license + " Name Driver: " + this.driver.name + " Passenger: " + passenger);
  }
}
