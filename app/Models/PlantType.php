<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantType extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        // 'garden_id',
        'name',
        'description',
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

    // public function gardenOwner(){ // Calling data for garden owner
    //     return $this->hasMany(gardenOwner::class, 'garden_id', 'id');
    // }

    public function gardenPlant(){ // Calling data for garden owner
        return $this->hasMany(GardenPlant::class, 'plant_id', 'id');
    }

    public function productSales(){ // Calling data for garden owner
        return $this->hasMany(ProductSales::class, 'plant_id', 'id');
    }

}
