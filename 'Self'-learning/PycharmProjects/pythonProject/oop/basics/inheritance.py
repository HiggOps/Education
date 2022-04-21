# Object Orientated Programming in Python
class Pet:
    def __init__(self, name, age):
        self.name = name
        self.age = age

    def show(self):
        print(f"I am {self.name} and I am {self.age} years old")

    def speak(self):
        print("I don't know what I say")

class Cat(Pet):
    def __init__(self, name, age, color):
        super().__init__(name, age)
        self.color = color

    def speak(self):
        print("Meow")

class Dog(Pet):
    def speak(self):
        print("Bark")
class Fish(Pet):
    pass

c = Cat("Tim", 19, "red")
c.show()
c.speak()
d = Dog("Steward", 2)
d.show()
d.speak()
f = Fish("Oscar", 5)
f.speak()