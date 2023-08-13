<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPrice extends Model
{
    use HasFactory;

    protected $table = 'pickup_price';
    protected $primaryKey = 'pickup_price_id';
    protected $guarded = ['pickup_price_id'];

    public function pickup()
    {
        return $this->belongsTo(Pickup::class, 'pickup_id', 'pickup_id');
    }
}
