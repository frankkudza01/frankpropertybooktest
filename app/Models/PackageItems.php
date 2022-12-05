<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageItems extends Model
{
    use HasFactory;
    protected $table='package_items';
    protected $guarded=[];

    public function package()
    {
        return $this->belongsTo(Packages::class,'package_id');
    }
}
