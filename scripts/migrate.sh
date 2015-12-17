#!/bin/bash
cd /vagrant

while [ ! -f /usr/local/etc/cphp/cphp.ini ]
do
  sleep 2
done

vendor/bin/phing -propertyfile /usr/local/etc/cphp/cphp.ini init
chown -R www-data:www-data /vagrant/*