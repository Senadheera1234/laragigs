<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'location', 'website', 'email','description', 'tags'];

    // just by creating this our listing model will be able to filtere
    public function scopeFilter($query, array $filters){

        // ?? false means if this is  true, go into the if function
        if($filters['tag'] ?? false){

            // use this to find the tag by ignoring the elements before and after the tag
            $query->where('tags', 'like', '%'. request('tag'). '%');
        }

        if($filters['search'] ?? false){

            // here, the search query check in all the fields including title, description, and tags
            $query->where('title', 'like', '%'. request('search'). 
            '%')
            ->orWhere('description', 'like', '%'. request('search'). 
            '%')
            ->orWhere('tags', 'like', '%'. request('search'). 
            '%');
        }
    }
}
