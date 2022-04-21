
try:
    value = 10/0
    number = float(input("Enter a number: "))
    print(number)
except ZeroDivisionError as err:
    print(err)
except ValueError:
    print("Invalid input")
#expect: is very broad it accepts all kind of errors