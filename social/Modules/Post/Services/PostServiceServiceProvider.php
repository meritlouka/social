<?php namespace Services\Pokemon;
use Illuminate\Support\ServiceProvider;
/**
* Register our pokemon service with Laravel
*/
class UserServiceServiceProvider extends ServiceProvider 
{
    /**
    * Registers the service in the IoC Container
    * 
    */
    public function register()
    {
        // Binds 'pokemonService' to the result of the closure
        $this->app->bind('UserService', function($app)
        {
            return new UserService(
                // Inject in our class of pokemonInterface, this will be our repository
                $app->make('App\Modules\Repositories\IUserRepository')
            );
        });
    }
}