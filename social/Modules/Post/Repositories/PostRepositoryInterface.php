<?php
namespace Modules\Post\Repositories;

interface PostRepositoryInterface {
    
    public function getAllUsers();
 
    public function getUserById($id);
 
    public function createOrUpdate($id = null);
}

