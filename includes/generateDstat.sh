#! /usr/bin/env bash
rm dstat.csv
touch dstat.csv
dstat --net --udp --tcp --noheader --output dstat.csv 1 10
python dstatParser.py
