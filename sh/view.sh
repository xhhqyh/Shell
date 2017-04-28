#!/bin/bash
#view.sh

cat /etc/passwd | grep 'bash' | awk -F: '{print $1}'
