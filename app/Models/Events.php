<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table='events';
    protected $guarded=[];

    public function history()
    {
       return $this->belongsTo(History::class,'history_id');
    }
}
