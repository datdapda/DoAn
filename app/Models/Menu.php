<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;


class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active',
        'user_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'menu_id', 'id');
    }
}
