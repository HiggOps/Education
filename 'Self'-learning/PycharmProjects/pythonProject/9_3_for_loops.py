
for letter in "Giraffe Academy":
    print(letter)

for index in range(3, 10): #with one value inside of range(10) starts from 0
    print(index)

friends = ["Jim", "Karen", "Kevin"]
for friend in friends: #prints out all of friend's names
    print(friend)

for index in range(len(friends)): #prints out all numbers of indexes
    print(index)

for index in range(len(friends)): #prints out all of friend's names
    print(friends[index])

for index in range(5):
    if index == 0:
        print("First iteration")
    else:
        print("Not first")