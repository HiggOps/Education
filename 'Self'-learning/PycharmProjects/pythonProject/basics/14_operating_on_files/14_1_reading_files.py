
employee_file = open("employees.txt", "r") #second parameter determines the mode
                                           # "w" which would input things inside the file
                                           # "r" which allows for reading the file
                                           # "a" which appends on existing file
                            #it's recommended to close a file at the end

#print(employee_file.read())

#print(employee_file.readline()) #puts the "cursor" at the end of the line
#print(employee_file.readline()) #so when used again it will output next line

#print(employee_file.readlines()) #outputs the whole file as array divided by new lines

#print(employee_file.readlines()[1])

for employee in employee_file.readlines():
    print(employee)
employee_file.close()