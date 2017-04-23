import MySQLdb

db = MySQLdb.connect(host="localhost", user="root", passwd="FredFredBurger", db="networkData")

cur = db.cursor()

with open("host_log.txt",'r') as file:
	lines = file.readlines()
	lines = lines[2:-3]
	for i in xrange(len(lines)):
		data = lines[i].split("\t")
		ip = data[0]
		mac = data[1]
		vendor = data[2]
                query = 'INSERT INTO Users(IPAddr,MacAddr,VendorInfo) VALUES("' + str(ip)  + '", "' + str(mac)  +  '", "' + str(vendor)  + '" );'
                print(query)
                try:
                    cur.execute(query)
                    db.commit()
                except:
                    db.rollback()
