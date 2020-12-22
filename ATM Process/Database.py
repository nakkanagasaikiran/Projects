def databaseCreation():
    import sqlite3 as sql
    conn=sql.connect("ICICI.db")
    curs=conn.cursor()
    curs.execute("create table account_info(acno number,pin number,name text,balance real)")
    conn.close()

def insertData():
    import sqlite3 as sql
    conn = sql.connect("ICICI.db")
    curs = conn.cursor()
    acno=int(input("Enter AccountNumber:"))
    pin=int(input("Enter PinNumber:"))
    name=input("Enter Name:")
    balance=float(input("Enter Amount:"))
    curs.execute("insert into account_info values (?,?,?,?)",(acno,pin,name,balance))
    conn.commit()
    conn.close()


insertData()
