<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use Sluggable;

    protected $fillable = ['is_public', 'slug', 'name', 'description', 'number_of_days'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
