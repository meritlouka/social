<?php 
namespace Modules\Post\Services;

use Modules\Post\Repositories\IPostRepository;
/**
* Our PokemonService, containing all useful methods for business logic around Pokemon
*/
class PostService
{
    // Containing our pokemonRepository to make all our database calls to
    protected $postRepo;
    
    /**
    * Loads our $pokemonRepo with the actual Repo associated with our pokemonInterface
    * 
    * @param pokemonInterface $pokemonRepo
    * @return PokemonService
    */
    public function __construct(IPostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }
    /**
    * Method to get pokemon based either on name or ID
    * 
    * @param mixed $pokemon
    * @return string
    */
    public function createPost()
    {
        
        return 'success';
    }
}