# Object Orientated Programming in Python

class Dog:
    def __init__(self, name, age):
        self.name = name
        self.age = age

    def get_name(self):
        return self.name

    def get_age(self):
        return self.age

    def set_age(self, age):
        self.age = age

    def bark(self):
        print("bark")



d = Dog("Tim", 2)
d.bark()
print(d.get_age())
print(d.get_name())

d2 = Dog("Stewart", 6)

print(d2.get_name())
print(d2.get_age())
d2.set_age(3)
print(d2.get_age())