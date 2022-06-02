friends = ["Kevin", "John", "Anna", "Emily", "Emily", "Oscar"]
lucky_numbers = [4, 42, 8, 15, 16, 23]

print(friends)
print(lucky_numbers)

# friends.extend(lucky_numbers)
# print(friends)

friends.append("Maciej") #insert new element on the end of list
print(friends)

friends.insert(2, "Amber") #insert new element on set index number
print(friends)

friends.remove("John") #removes specified element
print(friends)

friends.pop() #removes last element
print(friends)

# friends.clear() #removes all elements
# print(friends)

print(friends.index("Emily")) #returns index number which has specified element

print(friends.count("Emily")) #counts how much of specified element is in the list

friends.sort() #sorts list in ascending alphabetical order
lucky_numbers.sort()
print(friends)
print(lucky_numbers)

friends.reverse() #reverses elements in the list not in the alphabetical order
print(friends)

friends2 = friends.copy()

print(friends2)

