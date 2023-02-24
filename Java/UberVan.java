package Java;

import java.util.ArrayList;
import java.util.Map;

public class UberVan extends Car {
  Map<String, Map<String,Integer>> typeCarAccepted;
  ArrayList<String> seatsMaterial;

  public UberVan(
    String licence, Driver driver,
    Map<String, Map<String,Integer>> typeCarAccepted,
    ArrayList<String> seatsMaterial
  ){
    super( licence, driver);
    this.typeCarAccepted = typeCarAccepted;
    this.seatsMaterial = seatsMaterial;
  }

  public UberVan( String licence, Driver driver ){
    super( licence, driver);
  }

  @Override
  public void setPassenger(Integer passenger) {
    if ( passenger == 6 ){
      super.passenger = passenger;
    }else{
      System.out.println("debe de ingresar 6");
    }
  }
}
