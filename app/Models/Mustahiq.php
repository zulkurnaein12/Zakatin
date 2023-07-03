<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mustahiq extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'jenkel', 'no_tlp', 'kategori'];
    public function penerimaans()
    {
        return $this->hasMany(Penerimaan::class);
    }
}
