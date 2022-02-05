#!/bin/bash

cd /root/bt_wd_indexer
/usr/bin/php extract.php
sleep 2
/usr/bin/php create_index.php
sleep 2
git add .
git commit -m "Update"
git push

cp /root/bt_wd_indexer/index.html /var/www/html/newscrawler/others/index.html

