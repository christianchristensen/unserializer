#!/bin/sh

# TODO: make this a makefile not just a dumb shell script
wget -c http://www.caucho.com/download/resin-4.0.6.zip
unzip resin-4.0.6.zip
mkdir ./src/WEB-INF/lib
cp ./resin-4.0.6/lib/resin.jar ./src/WEB-INF/lib/resin.jar

