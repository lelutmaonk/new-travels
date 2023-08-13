<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $table = 'pickup';
    protected $primaryKey = 'pickup_id';
    protected $guarded = ['pickup_id'];

    public function terms_conditions()
    {
        return $this->hasMany(PickupTermsConditions::class, 'pickup_id', 'pickup_id');
    }

}
