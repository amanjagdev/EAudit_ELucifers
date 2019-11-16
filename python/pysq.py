import serial
import sqlite3
import os
from datetime import datetime
from datetime import date
today = date.today()
print(today)
now = datetime.now()
current_time = now.strftime("%H:%M:%S")
print(current_time)
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

portno = 'Com6'
# unit_charge = 0.1
# bill = 0

arduinosedata = serial.Serial(portno, 9600)
while(1==1):
    if(arduinosedata.inWaiting()>0):
        emdata = arduinosedata.readline()
        print(emdata.decode('utf-8'))

bill += curr_time*uni_charge