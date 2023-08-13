<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupTermsConditions extends Model
{
    use HasFactory;

    protected $table = 'terms_conditions';
    protected $primaryKey = 'terms_conditions_id';
    protected $guarded = ['terms_conditions_id'];

    public function pickup()
    {
        return $this->belongsTo(Pickup::class, 'pickup_id', 'pickup_id');
    }

}
