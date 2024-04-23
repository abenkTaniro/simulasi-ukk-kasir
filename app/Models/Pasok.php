<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasok extends Model
{
    use HasFactory;
    protected $table = 'pasoks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $guarded = ['id'];

    public function detail_pasok() : HasMany
    {
        return $this->hasMany(DetailPasok::class);
    }
    public function distributor() : BelongsTo
    {
        return $this->belongsTo(Distributor::class);
    }
}
