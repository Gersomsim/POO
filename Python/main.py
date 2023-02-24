from car import Car

if __name__ == "__main__":
    print("Hola mundo")
    car = Car()
    car.license = "AWS324"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "AZU324"
    car2.driver = "Martha Lopez"
    print(vars(car2))