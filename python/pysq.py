import serial
import sqlite3
import os

conn = sqlite3.connect("main.db")

cursor = conn.cursor()
sql_file = os.path.join(os.path.dirname(__file__), 'main.db')
needs_creation = not os.path.exists(sql_file) 
db_connection = sqlite3.connect(sql_file)
db_connection.row_factory = sqlite3.Row

if needs_creation:
    print("Data Base initalised")
    cursor = db_connection.cursor()

    db_connection.commit()
    print("Database created.")

# cursor.executescript("""
#                     DROP TABLE IF EXISTS elements;
#                     CREATE TABLE elements (id INTEGER PRIMARY KEY AUTOINCREMENT, Name, date CURDATE )
#                     """)

portno = "COM5"
ser = serial.Serial(portno, 9600)

print(ser)