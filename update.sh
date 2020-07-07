#!/bin/bash

cd /root/bt_wd_indexer
php extract.php
sleep 2
php create_index.php
sleep 2
git add .
git commit -m "Update"
git push

