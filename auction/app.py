import sqlite3 
from flask import Flask ,flash,session,render_template,redirect,escape, url_for,request, send_from_directory
import sys
import cgi, os
import cgitb; cgitb.enable()
from werkzeug import secure_filename
import time
import collections

app = Flask(__name__)
app.secret_key = 'any random string'

@app.route('/asd')
def asd():
	return render_template('index.html')

	
@app.route('/')
def homepage():
	conn=sqlite3.connect("auction.db")
	cur=conn.cursor()
	cur.execute("SELECT * FROM TEAMS")
	teams=cur.fetchall()
	cur.execute("SELECT count(*) FROM PLAYERS WHERE TEAM IS NOT NULL")
	var_order=cur.fetchone()
	order=int(var_order[0])
	print(order)
	conn.close()
	return render_template('homepage.html',teams=teams)



	
# Display TEAM details of the selected team from HOMEPAGE
@app.route('/team_details/<name>')
def team_details(name):
	conn=sqlite3.connect("auction.db")
	cur=conn.cursor()
	cur.execute("SELECT * FROM TEAMS WHERE name=?",(name,))
	team=cur.fetchone()
	cur.execute("SELECT * FROM PLAYERS WHERE TEAM=?",(name,))
	players=cur.fetchall()
	conn.close()
	return render_template('team_details.html',team=team,players=players)

	
	
	
@app.route('/player_list')
def player_list():
 conn=sqlite3.connect("auction.db")
 cur=conn.cursor()
 cur.execute("SELECT * FROM PLAYERS WHERE branch=?",('CE',))
 playerce=cur.fetchall()
 cur.execute("SELECT * FROM PLAYERS WHERE branch=?",('CSE',))
 playercs=cur.fetchall()
 cur.execute("SELECT * FROM PLAYERS WHERE branch=?",('EEE',))
 playereee=cur.fetchall()
 cur.execute("SELECT * FROM PLAYERS WHERE branch=?",('EC',))
 playerec=cur.fetchall()
 cur.execute("SELECT * FROM PLAYERS WHERE branch=?",('IT',))
 playerit=cur.fetchall()
 cur.execute("SELECT * FROM PLAYERS WHERE branch=?",('MECH',))
 playerme=cur.fetchall()
 conn.close()
 return render_template('player_list.html',playerce=playerce,playercs=playercs,playereee=playereee,playerec=playerec,playerit=playerit,playerme=playerme)




# FORM for searching player through ID
@app.route('/player_search')
def player_search():
	conn=sqlite3.connect('auction.db')
	cur=conn.cursor()
	cur.execute("SELECT * FROM PLAYERS")
	players=cur.fetchall()
	conn.close()
	return render_template('player_search.html',players=players)


# Display player DETAILS after search
@app.route('/player_details',methods=['GET','POST'])
def player_details():
	conn=sqlite3.connect('auction.db')
	cur=conn.cursor()
	id=request.form['ID']
	cur.execute("SELECT * FROM PLAYERS WHERE ID=?",(id,))
	detail=cur.fetchone()
	cur.execute("SELECT * FROM TEAMS")
	teams=cur.fetchall()
	cur.execute("SELECT * FROM PLAYERS WHERE TEAM IS NOT NULL ORDER BY NUMBER DESC LIMIT 5")
	history=cur.fetchall()
	conn.close()
	return render_template('player_details.html',detail=detail,teams=teams,history=history)	



# FORM for entering the selling player TEAM name
# 'id' is ID of the player which is being sold
@app.route("/player_sell_form/<id>")
def player_sell_form(id):
	conn=sqlite3.connect('auction.db')
	cur=conn.cursor()
	cur.execute("SELECT * FROM TEAMS")
	teams=cur.fetchall()
	conn.close()
	return render_template("player_sell_form.html",id=id,teams=teams)


# For entering selling player details into database
# 'id' is ID of the player which is being sold
@app.route('/player_sold/<id>',methods=['GET','POST'])
def player_sold(id):
	conn=sqlite3.connect('auction.db')
	cur=conn.cursor()
	team=request.form['TEAM']
	price=request.form['PRICE']
	# Update the TEAMS table and increase the number of players in that particular team
	cur.execute("UPDATE TEAMS SET PLAYERS=PLAYERS+1 WHERE NAME=?",(team,))
	# Update the TEAMS table and decrease the points 
	cur.execute("UPDATE TEAMS SET POINTS=POINTS-? WHERE NAME=?",(price,team,))
	# Get number of players sold
	cur.execute("SELECT count(*) FROM PLAYERS WHERE TEAM IS NOT NULL")
	var_order=cur.fetchone()
	order=int(var_order[0])
	order=order+1
	# Update the PLAYERS table for the reviewed player
	cur.execute("UPDATE PLAYERS SET TEAM=?,PRICE=?,NUMBER=? WHERE ID=?",(team,price,order,id,))
	conn.commit()
	conn.close()
	return redirect(url_for('homepage'))
	



if __name__ == '__main__':
   app.run(debug = True)	

