<?php namespace App\Modules\User\Repositories;
use App\Modules\User\Entities\User;
use App\Modules\User\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
/**
* Register our Repository with Laravel
*/
class UserRepositoryServiceProvider extends ServiceProvider 
{
    /**
    * Registers the pokemonInterface with Laravels IoC Container
    * 
    */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\PokemonInterface
        $this->app->bind('App\Modules\User\Repositories\IUserRepository', function($app)
        {
            return new UserRepository(new User());
        });
    }
}