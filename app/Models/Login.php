<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;
use App\Models\Artikel;

class Login extends Model
{
    use HasFactory;

    protected $table = 'login';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
}
