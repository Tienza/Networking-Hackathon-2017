#!/usr/bin/env bash
echo "$1" | grep 'Quality' | awk -F= '{print $3}'
