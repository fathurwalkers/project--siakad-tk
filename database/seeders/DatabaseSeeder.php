<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;
use App\Models\Detail;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $jeniskelamin               = 'L';
        $detail                     = new Detail;
        $login                      = new Login;
        $saveDetail = $detail->create([
            'detail_nama'           => 'Administrator',
            'detail_telepon'        => '085494939129',
            'detail_alamat'         => 'No Address',
            'detail_jeniskelamin'   => $jeniskelamin,
            'created_at'            => now(),
            'updated_at'            => now()
        ]);
        $saveDetail->save();
        

        $username               = 'admin';
        $password               = Hash::make($username, [
                                        'rounds' => 12,
                                    ]);
        $email                  = strtolower($username);
        $email                 .= '@siakadtk.com';
        $level                  = 'admin';
        $status                 = 'verified';

        $token = Str::random(16);
        $saveLogin = $login->create([
            'login_username'    => $username,
            'login_password'    => $password,
            'login_email'       => $email,
            'login_token'       => $token,
            'login_level'       => $level,
            'login_status'      => $status,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        $saveLogin->detail()->associate($saveDetail->id);
        $saveLogin->save();
    }
}
