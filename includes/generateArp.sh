#! /usr/bin/env bash
rm host_log.txt
arp-scan --interface=wlan0 --localnet > host_log.txt
python host_parse.py
