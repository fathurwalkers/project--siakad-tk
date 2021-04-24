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
                'detail_status'           => 'active',
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
            $status                 = ['active', 'unactive'];
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
        $cariUser = Login::where('login_username', $request->login_username)->where('login_status', 'active')->get();
        // dd($cariUser);
        if ($cariUser->isEmpty()) {
            return back()->with('login_fail', 'Maaf, username atau password salah!')->withInput();
        } else {
            $data_login = Login::where('login_username', $request->login_username)->firstOrFail();
            switch ($data_login->login_level) {
            case 'admin':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                    }
                }
                break;
            case 'guru':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                    }
                }
                // if ($request->login_password == $data_login->login_password) {
                //     $users = session(['data_login' => $data_login]);
                //     return redirect()->route('admin-index');
                // }
                break;
            case 'siswa':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                    }
                }
                break;
            case 'kepsek':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('admin-index')->with('login_success', 'Berhasil login!');
                    }
                }
                break;
            case 'guest':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('admin-index');
                    }
                }
                break;
            }
        }
    }

    public function postRegister(Request $request)
    {
        //
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login-page')->with('logout_success', 'Anda telah logout!');
    }
}
