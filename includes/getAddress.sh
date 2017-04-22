#!/usr/bin/env bash

echo "$1" | grep 'Address' | awk -F: '{ st = index($0,":"); print substr($0,st+2)}'
