#!/usr/bin/env bash

apt-get update
apt-get install -y apache2
apt-get install mysql-server
apt-get install php
apt-get install php7.0-mysql
if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi