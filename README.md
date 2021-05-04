# How to setup the application


## Install dependencies:
To run the application some composer libraries are needed - these need to be installed first.
Composer needs to be run for this. 
There are two variants to achieve this.

###First Step - Variant A: 
Start the docker container with 
- docker-compose up

Wait for the container composer/composer to run and shutoff.
Now all necessary files are installed in the /vendor folder.

Do a restart of the docker compose container.
With the second start all library files are available and the application should be running now.


###First Step - Variant B: 
Run composer directly

Open the directory /app in a shell where composer is available directly (see: https://getcomposer.org/download/)

Run 
- composer install --ignore-platform-reqs --prefer-source --no-plugins --no-scripts --optimize-autoloader

Now start the docker application with 
- docker-compose up

### Second Step
To enable the development mode:
copy /app/config/development.config.php.dist to /app/config/development.config.php
## Running the application

## Adding Dependencies
If you have additional packages needed by composer, add them to the composer.json, remove the composer.lock file and run the composer/composer container again to install the dependencies.

## API Documentation
The Swagger Documentation is available under http://localhost/api-tools/swagger
e.g. http://localhost/api-tools/swagger/Storage-v1#/Products


