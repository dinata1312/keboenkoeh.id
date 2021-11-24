<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'plant_id',
        'price',
        'amount',
        'price',
        'partner_id',
        'created_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function plantType(){ // Calling data for partner
        return $this->hasOne(PlantType::class, 'id', 'plant_id');
    }

    public function partner(){ // Calling data for partner
        return $this->hasOne(Partner::class, 'id', 'partner_id');
    }
}
