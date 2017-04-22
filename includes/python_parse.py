import re
import socket 
import MySQLdb

debug = False

db = MySQLdb.connect(host="localhost",    # your host, usually localhost
                     user="root",         # your username
                     passwd="FredFredBurger",  # your password
                     db="networkData")        # name of the data base

cur = db.cursor()

def chunks(array, splitVal):
    for i in xrange(0, len(array), splitVal):
        yield array[i:i + splitVal]

def main():
    print("Begin Parse...")
    with open('/var/www/html/includes/log.txt', 'r') as file:
        text = file.read()
        macAddr = re.findall('(\w+:\w+:\w+:\w+:\w+:\w+)',text)
        with open('/var/www/html/includes/log.txt','r') as file2:
            text2 = file2.readlines()       
            text2 = [x.strip() for x in text2]    
            text2 = list(chunks(text2,len(macAddr)))
            if debug:
                print(text2)
                for i in text2:
                    print(str(len(i)))
        
        if debug:
            for value in xrange(0, len(text2[0])):
                print(str(text2[0][value]) + ', ' + str(text2[1][value]) + ', ' + str(text2[2][value]) + ', ' + str(text2[3][value]) + ', ' + str(text2[4][value]))
    return text2

networks = main()
hostname = socket.gethostname()

# Use all the SQL you like
for network in xrange(0, len(networks[0])):
    query = 'INSERT INTO Network(SSID, MacAddr, Frequency, Quality, Strength, DeviceName) VALUES("' + str(networks[4][network]) + '", "' + str(networks[0][network]) + '", "' + str(networks[1][network]) + '", "' + str(networks[2][network]) + '", "' + str(networks[3][network])+ '", "' + str(hostname) + '");'
    print(query)
    try:
        cur.execute(query)
        db.commit()
    except:
        db.rollback()

db.close()
