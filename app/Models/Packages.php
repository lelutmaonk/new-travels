<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $table = 'packages';
    protected $primaryKey = 'packages_id';
    protected $guarded = ['packages_id'];

    public function additional_note()
    {
        return $this->hasMany(PackagesAdditionalNote::class, 'packages_id', 'packages_id');
    }

    public function included()
    {
        return $this->hasMany(PackagesIncluded::class, 'packages_id', 'packages_id');
    }

}
