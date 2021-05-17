<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Login;
use Faker\Factory as Faker;
use Illuminate\Support\Arr as Randoms;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Services\Blowfish;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class BackController extends Controller
{
    public function testroute()
    {
        // TESTING ROUTE
    }

    public function generateUser()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $jeniskelamin               = ['L', 'P'];
            $detail                     = new Detail;
            $login                      = new Login;
            $level                      = ['guest', 'user'];
            $saveDetail = $detail->create([
                'detail_nama'                   => $faker->name,
                'detail_nomor_registrasi'       => $faker->randomNumber(8),
                'detail_telepon'                => $faker->phoneNumber,
                'detail_alamat'                 => $faker->address,
                'detail_jeniskelamin'           => Randoms::random($jeniskelamin),
                'detail_status'           => 'ACTIVE',
                'detail_nama_ayah'              => $faker->name,
                'detail_nama_ibu'               => $faker->name,
                'detail_role'                   => Randoms::random($level),
                'created_at'                    => now(),
                'updated_at'                    => now()
            ]);
            $saveDetail->save();

            $username               = strtoupper(Str::random(5));
            $password               = Hash::make($username, [
                                            'rounds' => 12,
                                        ]);
            $email                  = strtolower($username);
            $email                 .= '@website.com';
            $status                 = ['ACTIVE', 'unactive'];
            $token = Str::random(16);
            $saveLogin = $login->create([
                'login_username'    => $username,
                'login_password'    => $password,
                'login_email'       => $email,
                'login_token'       => $token,
                'login_level'       => $saveDetail->detail_role,
                'login_status'      => Randoms::random($status),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
            $saveLogin->detail()->associate($saveDetail->id);
            $saveLogin->save();
        }
        return redirect()->route('home-index')->with('generate_success', 'Generate Data Berhasil');
    }

    public function postLogin(Request $request)
    {
        $cariUser = Login::where('login_username', $request->login_username)->get();
        if ($cariUser->isEmpty()) {
            return back()->with('login_fail', 'Maaf, username atau password salah!')->withInput();
        } else {
            $data_login = Login::where('login_username', $request->login_username)->firstOrFail();
            switch ($data_login->login_level) {
            case 'admin':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($data_login->login_status != 'ACTIVE') {
                        return back()->with('login_fail', 'Maaf, akun anda belum aktif!')->withInput();
                    } else {
                        if ($cek_password) {
                            $users = session(['data_login' => $data_login]);
                            return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                        }
                    }
                }
                break;
            case 'guru':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($data_login->login_status != 'ACTIVE') {
                        return back()->with('login_fail', 'Maaf, akun anda belum aktif!')->withInput();
                    } else {
                        if ($cek_password) {
                            $users = session(['data_login' => $data_login]);
                            return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                        }
                    }
                }
                break;
            case 'siswa':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($data_login->login_status != 'ACTIVE') {
                        return back()->with('login_fail', 'Maaf, akun anda belum aktif!')->withInput();
                    } else {
                        if ($cek_password) {
                            $users = session(['data_login' => $data_login]);
                            return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                        }
                    }
                }
                break;
            case 'kepsek':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($data_login->login_status != 'ACTIVE') {
                        return back()->with('login_fail', 'Maaf, akun anda belum aktif!')->withInput();
                    } else {
                        if ($cek_password) {
                            $users = session(['data_login' => $data_login]);
                            return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                        }
                    }
                }
                break;
            case 'guest':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($data_login->login_status != 'ACTIVE') {
                        return back()->with('login_fail', 'Maaf, akun anda belum aktif!')->withInput();
                    } else {
                        if ($cek_password) {
                            $users = session(['data_login' => $data_login]);
                            return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                        }
                    }
                }
                break;
            }
        }
    }

    public function postRegister(Request $request)
    {
        $detail                     = new Detail;
        $login                      = new Login;
        $level                      = 'user';
        $saveDetail = $detail->create([
            'detail_nama'                   => $request->detail_nama,
            'detail_nomor_registrasi'       => null,
            'detail_telepon'                => $request->detail_telepon,
            'detail_alamat'                 => null,
            'detail_jeniskelamin'           => $request->detail_jeniskelamin,
            'detail_status'                 => 'ACTIVE',
            'detail_nama_ayah'              => null,
            'detail_nama_ibu'               => null,
            'detail_role'                   => $level,
            'created_at'                    => now(),
            'updated_at'                    => now()
        ]);
        dd($saveDetail);
        // $saveDetail->save();
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login-page')->with('logout_success', 'Anda telah logout!');
    }
}
