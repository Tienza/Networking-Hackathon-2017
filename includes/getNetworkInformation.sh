#!/usr/bin/env bash

command_result=$(/sbin/iwlist wlan0 scanning)

/var/www/html/includes/getAddress.sh "$command_result"
/var/www/html/includes/getFrequency.sh "$command_result"
/var/www/html/includes/getQuality.sh "$command_result"
/var/www/html/includes/getSignal.sh "$command_result"
/var/www/html/includes/getSSID.sh "$command_result"
