<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenOwner extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'partner_id',
        'type',
        'large',
        'location',
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
    //     return $this->hasOne(PlantType::class, 'garden_id', 'id');
    // }

    public function partner(){ // Calling data for partner
        return $this->hasMany(Partner::class, 'partner_id', 'id');
    }
}
