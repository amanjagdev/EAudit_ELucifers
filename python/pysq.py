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

# Creating Database
# cursor.executescript("""
#                     DROP TABLE IF EXISTS Eaudit;
#                     CREATE TABLE Eaudit (sno INTEGER, tdate DATE, start_time TIME, duration TIME ,bill FLOAT)
#                     """)

portno = 'Com5'
bill = 0
appliance_watt = 20
total_usage = 0
rate = 5
time_usage =0.0

arduinosedata = serial.Serial(portno, 9600)
try:
    while(1==1):
        if(arduinosedata.inWaiting()>0):
            emdata = arduinosedata.readline()
            insecs = emdata.decode('utf-8')
except:
    time_usage = int(insecs) / 3600;
    total_usage = appliance_watt * time_usage
    bill = rate* total_usage
    print(bill)

# cursor.execute('INSERT INTO Eaudit VALUES(%d,"%s","%s","%s","%d")'%(sno),%(tdate),%(bill))
f = open("../bill.txt","w+")
bill = str(bill)
f.write(bill)
