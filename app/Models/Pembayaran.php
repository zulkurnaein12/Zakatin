<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nama', 'phone', 'alamat',  'jenja', 'total_beras', 'total_uang', 'ket', 'status'];
    public function penerimaans()
    {
        return $this->hasMany(Penerimaan::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
