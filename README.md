## Tech Test

### How to run

- git clone git@github.com:StyxOfDynamite/tech-test.git
- cd tech-test
- cp .env.example .env
- composer install
- vendor/bin/sail up -d
- vendor/bin/sail artisan key:generate
- vendor/bin/sail artisan migrate:fresh --seed
- vendor/bin/sail npm install
- vendor/bin/sail npm run dev
- Navigate to http://localhost
- Search for a vehicle, using 1 or more fields
