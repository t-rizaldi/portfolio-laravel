<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function setProjectDateAttribute($value)
    {
        $this->attributes['project_date'] = date('Y-m-t', strtotime($value));
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
