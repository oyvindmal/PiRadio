#!/bin/sh

/usr/bin/expect << EOD
	spawn telnet localhost 4212
	expect "Password:"
	send "test"
	send "\r"
	expect "Welcome, Master"
	send "clear"
	send "\r"
	sleep 1
	send "add $1"
	send "\r"
	send "logout"
	sleep 1
	send "\r"


EOD
