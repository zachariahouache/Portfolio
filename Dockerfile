# multi stage build ~2018
FROM node:15-slim as build

COPY package.json .
COPY package-lock.json .

RUN npm install .

FROM php:7.4-apache

COPY --from=build node_modules/ node_modules

COPY . /var/www/html/
