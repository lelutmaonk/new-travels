<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagesItinerary extends Model
{
    use HasFactory;

    protected $table = 'itinerary';
    protected $primaryKey = 'itinerary_id';
    protected $guarded = ['itinerary_id'];

    public function packages()
    {
        return $this->belongsTo(Packages::class, 'packages_id', 'packages_id');
    }
}
