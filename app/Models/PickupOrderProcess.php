<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupOrderProcess extends Model
{
    use HasFactory;

    protected $table = 'order_process';
    protected $primaryKey = 'order_process_id';
    protected $guarded = ['order_process_id'];

    public function pickup()
    {
        return $this->belongsTo(Pickup::class, 'pickup_id', 'pickup_id');
    }
}
