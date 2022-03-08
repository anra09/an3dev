<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyedia_layanan extends Model
{
    use HasFactory;

    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class);
    }
}
