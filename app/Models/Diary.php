<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;
// use ESolution\DBEncryption\Traits\EncryptedAttribute;
use HiHaHo\EncryptableTrait\Encryptable;

class Diary extends Eloquent
{
    // use HasFactory;

    protected $fillable = [
        'judul',
        'diary',
        'mood',
    ];
    
    use Encryptable;
    protected $encryptable = [
        'diary',
    ];

}
