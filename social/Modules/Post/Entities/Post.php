<?php

namespace Modules\Post\Entities;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content'
    ];

 
}
