#!/bin/bash

rm -rf /tmp/update_bak
wget https://github.com/TheRealDanilson/HornWebsite/archive/master.zip -O /tmp/master.zip
unzip -d /tmp/ /tmp/master.zip
cp -ar /srv/http/ /tmp/update_bak/
rm -rf /srv/http/*
mv /tmp/HornWebsite-master/* /srv/http/
rmdir /tmp/HornWebsite-master
rm /tmp/master.zip
