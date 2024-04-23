<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kasir extends Model
{
    use HasFactory;
    protected $table = 'kasirs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $guarded = ['id'];

    public function penjualan() : HasMany
    {
        return $this->hasMany(Penjualan::class);
    }
}
