<?php
namespace Modules\Post\Repositories;

use  Modules\Post\Entites\Post;
use  Modules\Post\Repositories\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface {
 
    public function getAllUsers()
    {
        return Post::all();
    }
 
    public function getUserById($id)
    {
        return Post::find($id);
    }
 
    public function createOrUpdate($id = null)
    {
        // if(is_null($id)) {
        //     // create after validation
        //     $user = new Post;
        //     $user->name = 'Sheikh Heera'
        //     $user->email = 'me@yahoo.com';
        //     $user->password = '123456'
        //     return $user->save();
        // }
        // else {
        //     // update after validation
        //     $user = Post::find($id);
        //     $user->name = 'Sheikh Heera'
        //     $user->email = 'me@yahoo.com';
        //     $user->password = '123456'
        //     return $user->save();
        // }
    }
 
}