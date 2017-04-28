#!/bin/bash

#给当前用户添加密码
echo $1 | sudo passwd $2 --stdin &>/dev/null
