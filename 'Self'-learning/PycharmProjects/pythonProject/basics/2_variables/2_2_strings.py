print("----backslash operations----")

print("Giraffe\nAcademy") #new line
print("Giraffe\"Academy\"") #quotation marks

print("----changing case of strings----")

phrase = "Giraffe Academy"

print(phrase + " is cool") #
print(phrase.lower() + " is cool") #all characters to lowercase
#output = giraffe academy #variable = "Giraffe Academy"
print(phrase.upper() + " is cool") #all characters to uppercase
#output = GIRAFFE ACADEMY #variable = "Giraffe Academy"

print("----checking case of strings----")

phrase = phrase.upper() #GIRAFFE ACADEMY

print(phrase)
print(phrase.islower()) #check if all characters in string are lowercase #false
print(phrase.isupper()) #check if all characters in string are uppercase #true

print("-----checking length of strings----")

phrase = "Giraffe Academy"

print(len(phrase)) #15

print("-----cutting length of strings----")

print(phrase[0]) #returns specified letter of [index] #G
print(phrase.index("G")) #returns the index number of specified letter #0
print(phrase.index("Acad")) #returns the index number of first letter from this string #8
                            #if specified letter isn't found returns error
print(phrase.replace("Giraffe", "Elephant")) #replaces first part with the second one #Elephant Academy