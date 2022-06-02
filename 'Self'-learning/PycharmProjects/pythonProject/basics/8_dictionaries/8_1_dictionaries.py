
month_conversions = {
    "Jan": "January",
    "Feb": "February",
    "Mar": "March",
    "Apr": "April",
    "May": "May",
    "Jun": "June",
    "Jul": "July",
    "Aug": "August",
    "Sep": "September",
    "Oct": "October",
    "Nov": "November",
    "Dec": "December",
}

print(month_conversions["Nov"])
print(month_conversions.get("Nov"))
print(month_conversions.get("Luv"))
print(month_conversions.get("Lov", "Not a valid key"))