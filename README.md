# Shared Stores for Woocommerce - React, PHP, Docker and DigitalOcean API 
A possible way to integrate frontend using **React** with **Laravel 10** as backend. \
Using **docker** for local development and production. \
Integrated with **Digitalocean API** to create droplet and deploy.

# Stack
- Docker
- Vite + React + TS
- PHP: Laravel
- DigitalOcean API

## Install
### `docker-compose build`

## Development
### Start: `docker-compose up`
Frontend url: http://localhost:3000 \
Backend url: http://localhost:8989

## Production
### Create droplet and deploy: ` ./deploy.sh`
Frontend url: IP or DOMAIN
Backend url: IP or DOMAIN + :8989
