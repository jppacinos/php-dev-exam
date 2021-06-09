### PHP Developer Exam

### Local setup

-   run `composer install` (requires Composer: https://getcomposer.org)
-   configure `.env.example` to `.env` update config (also see: .env-backup)
-   run `php artisan key:generate`
-   run migrations `php artisan migrate:fresh --seed`
-   run development server `php artisan serve`

#### Using sqlite database

uploading `database.sqlite` is ignored by git by default so you have to create one.

-   create file `database.sqlite` inside `database` folder
-   then run `php artisan migrate:fresh --seed`

### Frontend assets

Frontend assets is compiled already so you may not have to do this.

-   run `npm install` and `npm run prod`
