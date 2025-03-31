# Production base

A template repository with docker based light environment for production server, based on 
stable versions of containers, with minimal critical configurations made only.

The goal is to make deployment of the software built on [Development base](https://github.com/Fresh-Advance/Development) 
as easy as possible, but also having more secure enviroment.

## What we have here

* Apache 2.4 (based on original httpd:2.4-alpine container)
  * with https turned on (exchange the certificates in ``containers/httpd/certs`` folder to real ones)
* PHP 8.3 (based on original php:x.x-fpm containers) with:
  * composer 2
* MySQL 8.0 (8.0-debian container) as default

## Requirements

* Docker (https://docs.docker.com/get-docker/)
* Docker compose (https://docs.docker.com/compose/install/)

## How to use it

1. Clone the repository
2. Run ``make setup`` command which creates .env file with default values
3. Check the ``.env`` file and adjust the values if needed
4. Run ``make addbasicservices`` to build the docker-compose.yml file from parts
5. Run ``make up`` to start the containers
6. Your ``source`` folder will be available as website root

## Contributing

You like to contribute? 🙌 AWESOME 🙌 Throw a pull request, with the description why you/we need it and 
instructions how to test it out :)