#! /usr/bin/env bash
rm log.txt
./getNetworkInformation.sh > log.txt
python python_parse.py
./generateDstat.sh
