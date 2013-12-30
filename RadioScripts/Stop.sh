#!/bin/sh

/usr/bin/expect << EOD
	spawn telnet localhost 4212
	expect "Password:"
	send "test"
	send "\r"
	expect "Welcome, Master"
	send "stop"
	send "\r"
	sleep 1
	send "logout"
	
	send "\r"


EOD
