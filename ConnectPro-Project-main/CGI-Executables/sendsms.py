#!/usr/local/opt/python@3.9/libexec/bin/python
import cgi, cgitb
import smtplib, sys
from email.message import EmailMessage

cgitb.enable()
fs = cgi.FieldStorage()
print("Content-Type: text/plain\r\n\r\n")

def sendEmail(message, email):
	msg = EmailMessage()
	msg['Subject'] = 'ConnectPro Notification'
	msg['From'] = "connectpro.gmu@gmail.com"
	msg['To'] = email
	msg.set_type('text/plain')
	msg.set_content(message)
	server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
	server.login("connectpro.gmu@gmail.com","GMUFall2021")
	server.send_message(msg)
	server.quit()

sendEmail(fs['message'].value, fs['phone'].value)