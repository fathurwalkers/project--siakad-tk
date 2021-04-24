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
        $level                      = 'admin';
        $saveDetail = $detail->create([
            'detail_nama'                           => 'Administrator',
            'detail_nomor_registrasi'               => '99999999',
            'detail_telepon'                        => '085494939129',
            'detail_alamat'                         => 'No Address',
            'detail_jeniskelamin'                   => $jeniskelamin,
            'detail_status'                         => 'active',
            'detail_nama_ayah'                      => null,
            'detail_nama_ibu'                       => null,
            'detail_role'                           => $level,
            'created_at'                            => now(),
            'updated_at'                            => now()
        ]);
        $saveDetail->save();
        $username               = 'admin';
        $password               = Hash::make($username, [
                                        'rounds' => 12,
                                    ]);
        $email                  = strtolower($username);
        $email                 .= '@siakadtk.com';
        $status                 = 'active';
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

        // ------------------------------------------------------------------------------ //

        $jeniskelamin               = 'P';
        $level                      = 'admin';
        $saveDetail2 = $detail->create([
            'detail_nama'                           => 'Administrator 2',
            'detail_nomor_registrasi'               => '99999992',
            'detail_telepon'                        => '085494939222',
            'detail_alamat'                         => 'No Address',
            'detail_jeniskelamin'                   => $jeniskelamin,
            'detail_status'                         => 'unactive',
            'detail_nama_ayah'                      => null,
            'detail_nama_ibu'                       => null,
            'detail_role'                           => $level,
            'created_at'                            => now(),
            'updated_at'                            => now()
        ]);
        $saveDetail2->save();
        $username               = 'admin2';
        $password               = Hash::make($username, [
                                        'rounds' => 12,
                                    ]);
        $email                  = strtolower($username);
        $email                 .= '@siakadtk.com';
        $status                 = 'active';
        $token = Str::random(16);
        $saveLogin2 = $login->create([
            'login_username'    => $username,
            'login_password'    => $password,
            'login_email'       => $email,
            'login_token'       => $token,
            'login_level'       => $level,
            'login_status'      => $status,
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        $saveLogin2->detail()->associate($saveDetail2->id);
        $saveLogin2->save();
    }
}
