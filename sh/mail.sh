#!/bin/bash
#mail.sh

#把邮件内容追加到file文件中
sudo sed -i "1c $1" /var/www/html/shell/file1

#发送邮件
sudo mail -s $2 $3 < file1
