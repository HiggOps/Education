
number_grid = [
#column 1  2
    [1, 2, 3], #row 0
    [4, 5, 6], #row 1
    [7, 8, 9], #row 2
    [0]        #row 3
]

print((number_grid[0][2]))

for row in number_grid:
    print(row)

for row in number_grid:
    for col in row:
        print(col)