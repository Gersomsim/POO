package Java;
class Main {
  public static void main(String[] args) {
    System.out.println("Hola mundo");
    UberX uberX = new UberX("AMQ123", new Driver("Juan Perez", "JP21234", "j.perez@uber.com", "123ASD"), "Dodge", "Atitude");
    uberX.setPassenger(4);
    uberX.printDataCar();
  }
}