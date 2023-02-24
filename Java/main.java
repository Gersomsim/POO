package Java;
class Main {
  public static void main(String[] args) {
    System.out.println("Hola mundo");
    Car car = new Car();
    car.license = "AMQ123";
    car.driver = "Andres Gomez";
    car.passenger = 4;
    car.printDataCar();

    Car car2 = new Car();
    car2.license = "QWE123";
    car2.driver = "Andrea Gomez";
    car2.passenger = 2;
    car2.printDataCar();
  }
}