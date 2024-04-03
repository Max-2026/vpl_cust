#!/bin/bash

# Define variables
DEPLOY_BRANCH="refactor"
PROJECT_DIRECTORY="./vpl"
DEPLOY_DIRECTORY="./deploy"
DEPLOY_SCRIPT="deploy.php"
SERVER_DIR="/deploy"

# Checkout Repository
git checkout $DEPLOY_BRANCH

# Move to project directory
cd $PROJECT_DIRECTORY

# Install dependencies from composer.lock
composer install --no-scripts --no-interaction

# Run Database Migrations
php artisan migrate --force --seed

# Create Deploy Directory
mkdir -p $DEPLOY_DIRECTORY

# Move deployment script to deploy dir
mv $DEPLOY_SCRIPT $DEPLOY_DIRECTORY

# Build Zip
tar --exclude='.deploy/' -czf $DEPLOY_DIRECTORY/project.tar.gz ./*

# FTP Deploy
lftp -c "open -u $FTP_USERNAME,$FTP_PASSWORD $FTP_SERVER; mirror -R $DEPLOY_DIRECTORY $SERVER_DIR"

# Make HTTP Request to deploy.php
curl $DEPLOY_URL/deploy/$DEPLOY_SCRIPT
