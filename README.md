
## Installation

1. Clone this project or Download that ZIP file
2. On your terminal/command prompt do the following commands.

`$ cd <project-directory>` Navigate to the project directory

`$ cp .env.example .env`

`$ php artisan key:generate`  Generate key since this is a cloned project

`$ composer install`  Install required packages

`$ php artisan migrate` Run database migrations

`$ php artisan db:seed` Run Seeders

`$ php artisan passport:install` Install Passport Service Provider

`$ npm install` Install additional depencies

`$ npm run watch` Optional

`$ php artisan cache:clear` Optional

`$ php artisan serve`

3. Open `http://localhost:8000` in your browser
login using credenctials:
username: admin@mail.com
password: password
