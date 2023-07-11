## Tech Test

### How to run
- Clone this repo
- composer install
- Run ./vendor/bin/sail up -d
- Copy .env.example to .env
- Run ./vendor/bin/sail artisan key:generate
- Run ./vendor/bin/sail artisan migrate
- Run ./vendor/bin/sail artisan db:seed

- Navigate to http://localhost
- Search for a vehicle, using 1 or more fields
