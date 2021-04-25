<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Login;
use App\Models\Gambar;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function login()
    {
        return $this->belongsTo(Login::class);
    }

    public function gambar()
    {
        return $this->belongsTo(Gambar::class);
    }
}
