#!/bin/sh

/usr/bin/expect << EOD
	spawn telnet 192.168.1.190 4212
	expect "Password:"
	send "test"
	send "\r"
	expect "Welcome, Master"
	send "play"
	send "\r"
	sleep 1
	send "logout"
	
	send "\r"


EOD
