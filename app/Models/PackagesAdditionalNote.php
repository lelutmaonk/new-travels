<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagesAdditionalNote extends Model
{
    use HasFactory;

    protected $table = 'additional_note';
    protected $primaryKey = 'additional_note_id';
    protected $guarded = ['additional_note_id'];

    public function packages()
    {
        return $this->belongsTo(Packages::class, 'packages_id', 'packages_id');
    }

}
