#!/bin/bash

sudo docker-compose up -d
sudo chown -R $USER':'$USER ./public/
sudo chown -R www-data:www-data ./public/wp-content/uploads/