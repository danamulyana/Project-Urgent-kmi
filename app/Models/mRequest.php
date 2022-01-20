<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class mRequest extends Model
{
    use HasFactory;

    const CREATED_AT = 'dtmcreatedat';
    const UPDATED_AT = 'dtmupdatedat';
    protected $primaryKey = 'intidrequest';

    protected $fillable = [
        'txtslug',
        'txtnorequest',
        'intiduser',
        'txtmumberpr',
        'txtreason',
        'dtmtanggalkebutuhan',
        'txtstatus',
        'intalur',
    ];

    public function barang() : HasMany
    {
        return $this->hasMany(trRequestbarang::class,'intidrequest');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'intiduser');
    }
}
