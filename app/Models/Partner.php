<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'middleman',
        'phone_number',
        'address',
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

    public function moneyLiquidity(){ // Calling data for money liquidity
        return $this->hasOne(MoneyLiquidity::class, 'partner_id', 'id');
    }

    public function gardenOwner(){ // Calling data for garden owner
        return $this->hasOne(GardenOwner::class, 'partner_id', 'id');
    }
}
