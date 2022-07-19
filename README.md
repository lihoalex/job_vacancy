# Setup sail

> [Official Laravel Documentation](https://laravel.com/docs/9.x/sail#main-content)

Clone the repository

    git clone https://github.com/lihoalex/job_vacancy.git

Install dependencies

    composer install

Copy the .env.example file and make the required configuration changes in your .env file

    cp .env.example .env

Generate a new JWT authentication secret key

    php artisan jwt:generate

Create alias

    alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'

Up container

    sail up -d

To check running instance

    sail ps

Run a migrations

    sail artisan migrate
