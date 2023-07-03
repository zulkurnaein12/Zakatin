<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'mustahiq_id', 'jenja',  'pembayaran_id', 'total_beras', 'total_uang', 'ket'];
    public function mustahiqs()
    {
        return $this->belongsTo(Mustahiq::class, 'mustahiq_id');
    }
    public function pembayarans()
    {
        return $this->belongsTo(Pembayaran::class, 'pembayaran_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
