<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagesIncluded extends Model
{
    use HasFactory;

    protected $table = 'included';
    protected $primaryKey = 'included_id';
    protected $guarded = ['included_id'];

    public function packages()
    {
        return $this->belongsTo(Packages::class, 'packages_id', 'packages_id');
    }
}
