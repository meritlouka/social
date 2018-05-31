<?php 
namespace Modules\Post\Services;

use Illuminate\Support\ServiceProvider;
/**
* Register our pokemon service with Laravel
*/
class PostServiceServiceProvider extends ServiceProvider 
{
    /**
    * Registers the service in the IoC Container
    * 
    */
    // public function register()
    // {
    //     // Binds 'pokemonService' to the result of the closure
    //     $this->app->bind('PostService', function($app)
    //     {
    //         return new PostService(
    //             // Inject in our class of pokemonInterface, this will be our repository
    //             $app->make('App\Modules\Repositories\IPostRepository')
    //         );
    //     });
    // }
}