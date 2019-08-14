#!/bin/bash

wget https://github.com/TheRealDanilson/HornWebsite/archive/master.zip -O /tmp/master.zip
unzip -d /tmp/ /tmp/master.zip
rm -rf /tmp/update_bak
cp -ar /srv/http/ /tmp/update_bak/
rm -rf /srv/http/*
mv /tmp/HornWebsite-master/* /srv/http/
