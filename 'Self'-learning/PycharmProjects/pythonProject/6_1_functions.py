
def say_hi(name, age): #function names all lowercase
                        #function's content has to be indented
    print("Hello " + name + ", you are " + str(age))

print("Top")
say_hi("John", 45)
say_hi("Mike", 23)
print("Bottom")

def cube(num):
    return num * num * num #return breaks out functions

print(cube(3))
print(cube(5))

result = cube(4)
print(result)