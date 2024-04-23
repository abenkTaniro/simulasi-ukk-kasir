<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPasok extends Model
{
    use HasFactory;
    protected $table = 'detail_pasoks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $guarded = ['id'];

    public function pasok() : BelongsTo
    {
        return $this->belongsTo(Pasok::class);
    }
    public function buku() : BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}
