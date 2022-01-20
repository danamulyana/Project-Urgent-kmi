<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trRequestbarang extends Model
{
    use HasFactory;

    const CREATED_AT = 'dtmcreatedat';
    const UPDATED_AT = 'dtmupdatedat';
    protected $primaryKey = 'intidrequestbarang';

    protected $fillable = [
        
    ];
}
