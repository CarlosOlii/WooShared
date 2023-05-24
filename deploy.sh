#!/bin/bash

docker-machine create --driver digitalocean \
 --digitalocean-image ubuntu-20-04-x64 \
 --digitalocean-access-token TOKEN \
 --digitalocean-region fra1 \
 --engine-install-url "https://releases.rancher.com/install-docker/19.03.9.sh" \
 wooshared-live

eval $(docker-machine env wooshared-live)

docker-compose -f docker-compose.prod.yml build --parallel

docker-compose -f docker-compose.prod.yml up
