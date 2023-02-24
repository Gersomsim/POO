from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola mundo")
    car = Car( "AWS123", Account('Juan perez', 'JP234') )
    print(vars(car))

    car2 = Car( "AZU324", Account('Martha Lopez', 'MLP234') )
    print(vars(car2))