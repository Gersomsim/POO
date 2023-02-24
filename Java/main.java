package Java;
class Main {
  public static void main(String[] args) {
    System.out.println("Hola mundo");
    Account driver = new Account("Juan Roman", "JR123");
    Car car = new Car("AMQ123", driver);

    car.passenger = 4;
    car.printDataCar();

    Account driver2 = new Account("Andrea Gomez", "AG123");
    Car car2 = new Car("QWE123", driver2);
    car2.passenger = 2;
    car2.printDataCar();
  }
}