<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupPriceDetail extends Model
{
    use HasFactory;

    protected $table = 'pickup_price_detail';
    protected $primaryKey = 'pickup_price_detail_id';
    protected $guarded = ['pickup_price_detail_id'];

    public function pickup_price()
    {
        return $this->hasOne(PickupPrice::class, 'pickup_price_id', 'pickup_price_id'); 
    }

}
