composer create-project laravel/laravel chirper
composer require laravel/breeze --dev
php artisan breeze:install blade
php artisan serve
php artisan make:model --help
php artisan make:model -mfc Chirp
php artisan route:list

php artisan make:policy ChirpPolicy --model=Chirp

-   public function update(User $user, Chirp $chirp): bool
    {
            //
            return $chirp->user()->is($user);
    }
