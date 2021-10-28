<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyLiquidity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'category_id',
        'partner_id',
        'notes',
        'type',
        'amount',
        'price',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function category(){ // Calling data for category
        return $this->hasMany(Category::class, 'id', 'category_id');
    }

    public function partner(){ // Calling data for partner
        return $this->hasMany(Partner::class, 'id', 'partner_id');
    }
}
