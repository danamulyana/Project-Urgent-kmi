<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trRequestbarang extends Model
{
    use HasFactory;

    const CREATED_AT = 'dtmcreatedat';
    const UPDATED_AT = 'dtmupdatedat';
    protected $primaryKey = 'intidrequestbarang';

    protected $fillable = [
        'txtnamabarang',
        'txtjumlah',
        'txtsatuan',
        'txtketerangan'
    ];

    public function request() : BelongsTo
    {
        return $this->belongsTo(mRequest::class,'intidrequest');
    }
}
