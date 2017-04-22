#!/usr/bin/env bash
echo "$1" | grep 'ESSID' | awk -F: '{print substr($2, 2, length($2)-2)}'
