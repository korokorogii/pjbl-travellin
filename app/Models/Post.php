<?php

namespace App\Models;

use App\Models\Autentikasi;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use Sluggable, HasFactory;

    public function user()
    {
        return $this->belongsTo(Autentikasi::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->where('judul', 'like', '%' . request('search') . '%');
        }
    }

    protected $guarded = [];
}
