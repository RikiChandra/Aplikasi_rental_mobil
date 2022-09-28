<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;

    public function scopeFillter($query, array $filters)
    {
        // if(request('search')){
        //     $query->where('merek', 'like', '%'. request('search').'%')->orWhere('nama_mobil', 'like','%'.request('search').'%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_vendor', 'like', '%' . $search . '%')->orWhere('nama_mobil', 'like', '%' . $search . '%');
        });
    }
}
