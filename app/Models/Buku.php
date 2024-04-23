<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $guarded = ['id'];

    public function detail_pasok() : HasMany
    {
        return $this->hasMany(DetailPasok::class);
    }
    public function detail_penjualan() : HasMany
    {
        return $this->hasMany(DetailPenjualan::class);
    }
}
