<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function scopeFilter($query) {
        if (request('search')) {
            $query->where('name', 'like', '%' .request('search'). '%')
                    ->orWhere('email', 'like', '%' .request('search'). '%')
                    ->orWhere('phone', 'like', '%' .request('search'). '%')
                    ->orWhere('service', 'like', '%' .request('search'). '%')
                    ->orWhere('found', 'like', '%' .request('search'). '%')
                    ->whereFullText('subject', request('search'))
                    ->orWhereFullText('message', request('search'));
        }
    }
}
