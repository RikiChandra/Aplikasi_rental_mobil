<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myOrder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function daftarmobil()
    {
        return $this->belongsTo(Daftarmobil::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
