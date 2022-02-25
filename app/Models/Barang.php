<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use HasFactory, SoftDeletes;

    // protected $fillable = [
    //     'nama',
    //     'slug',
    //     'type',
    //     'description',
    //     'price',
    //     'quantity',
    // ]

    protected $guarded = [
        'id',
        'create_at',
        'update_at',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallerie::class);
    }
}
