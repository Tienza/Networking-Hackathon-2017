#!/usr/bin/env bash

command_result=$(iwlist wlp4s0 scanning)

/home/graham/getAddress.sh "$command_result"
/home/graham/getFrequency.sh "$command_result"
/home/graham/getQuality.sh "$command_result"
/home/graham/getSignal.sh "$command_result"
/home/graham/getSSID.sh "$command_result"
