
employee_file = open("employees.txt", "a") #appending mode
employee_file.write("\nKelly - Customer Service")
employee_file.close()

employee_file = open("index.html", "w") #overwriting mode

employee_file.write("<p>This is HTML file</p>")

employee_file.close()