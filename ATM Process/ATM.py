import sqlite3 as sql
conn=sql.connect("ICICI.db")
curs=conn.cursor()
uacno=int(input("Enter AcountNumber:"))
upin=int(input("Enter pinnumber:"))
curs.execute("select name,balance from account_info where acno=? and pin=?",(uacno,upin))
res=curs.fetchone()
if(res==None):
    print("Invalid Details")
else:
    print("HI",res[0],"Welcome to ICICI ATM")
print("please select any option:")
print("1.Deposit")
print("2.WithDraw")
print("3.Balance Enquiry")
option=int(input("Enter your choice:"))
if(option==1):
    print("Available Balance is:", res[1])
    amount=int(input("Enter amount to Deposit:"))
    total=res[1]+amount
    curs.execute("update account_info set balance=? where acno=?",(total,uacno))
    print("After Deposit Available Balance is:",total)
    conn.commit()
elif(option==2):
    print("Available Balance is:", res[1])
    amount = int(input("Enter amount to WithDraw:"))
    if(res[1] >= amount):
        total=res[1]-amount
        curs.execute("update account_info set balance=? where acno=?", (total, uacno))
    else:
        print("Insufficient Balance")
    print("After Withdraw Available Balance is:",total)
    conn.commit()
elif(option==3):
    print("Your Account balance is:",res[1])
else:
    print("Invalid option")