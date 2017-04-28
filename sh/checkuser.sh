#!/bin/bash
#checkuser.sh

for user_exist in `cut -f 1 -d : /etc/passwd`
do
	user="$1"
	if [ "$user" == "$user_exist" ];then
		echo "000"
		exit
	fi
done

