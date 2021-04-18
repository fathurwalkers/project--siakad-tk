<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class Login extends Model
{
    use HasFactory;

    protected $table = 'login';

    protected $guarded = [];

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
