#!/bin/sh

/usr/bin/expect << EOF

spawn telnet localhost 4212
expect "Password:"
send "test"
send "\r"
expect "Welcome, Master"
send "get_title\r"
expect "get_title\r"
send "logout\n"
EOF
