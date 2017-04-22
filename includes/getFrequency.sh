#!/usr/bin/env bash

echo "$1" | grep 'Frequency' | awk -F: '{print $2}'
