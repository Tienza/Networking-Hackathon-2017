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
    with open('/var/www/html/includes/dstat.csv', 'r') as file:
        text = file.readlines()
        for i in text[8:]:
		fields = map(str,i.split(","))
		query = 'INSERT INTO Dstat(net_recv,net_send,udp_lis,udp_act,tcp_lis,tcp_act,tcp_syn,tcp_tim,tcp_clo) VALUES('+fields[0]+','+fields[1]+','+fields[2]+','+fields[3]+','+fields[4]+','+fields[5]+','+fields[6]+','+fields[7]+','+fields[8]+');'
		print("This is my query " + query);
		try:
			cur.execute(query)
			db.commit()
		except:
			db.rollback()
	
networks = main()
db.close()
