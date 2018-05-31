<?php 
namespace Modules\Post\Repositories;
use Modules\Post\Entities\post;
use Modules\Post\Repositories\PostRepository;
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
        // // Bind the returned class to the namespace 'Repositories\PokemonInterface
        // $this->app->bind('App\Modules\User\Repositories\IPostRepository', function($app)
        // {
        //     return new UserRepository(new User());
        // });
    }
}