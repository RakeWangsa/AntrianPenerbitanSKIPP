<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = ['id','no_antrian', 'no_ppk', 'jenis_layanan', 'is_call', 'tanggal_antrian', 'user_id','nama'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
