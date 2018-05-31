<?php

namespace Modules\Post\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\Post\Services\PostService;
use Modules\Post\Repositories\IPostRepository;
use  Modules\Post\Entites\Post;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind the returned class to the namespace 'Repositories\PokemonInterface
        $this->app->bind('IPostRepository', function($app)
        {
            return new PostRepository(new Post());
         });

        // Binds 'pokemonService' to the result of the closure
        $this->app->bind("PostService", function($app)
        {
            return new PostService(
                // Inject in our class of pokemonInterface, this will be our repository
                $app->make( 'Modules\Post\Repositories\IPostRepository')
            );
        });

    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('post.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'post'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/post');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/post';
        }, \Config::get('view.paths')), [$sourcePath]), 'post');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/post');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'post');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'post');
        }
    }

    /**
     * Register an additional directory of factories.
     * @source https://github.com/sebastiaanluca/laravel-resource-flow/blob/develop/src/Modules/ModuleServiceProvider.php#L66
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
