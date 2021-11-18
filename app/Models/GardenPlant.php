<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenPlant extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'plant_id',
        'amount',
        'price',
        'started',
        'harvest',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function PlantType(){ // Calling data for garden owner
        return $this->hasOne(PlantType::class, 'id', 'plant_id');
    }
    
}
