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

class BackController extends Controller
{
    public function testroute()
    {
        $plainText      = '111';
        $encPassword    = 'ctr';
        $encVector      = 'vector';
        // $encType        = Blowfish::BLOWFISH_MODE_EBC;
        // $paddingType    = Blowfish::BLOWFISH_PADDING_RFC;
        
        $blowfish = new Blowfish("secret Key");

        $crypted        = $blowfish->Encrypt($plainText);
        $decrypted      = $blowfish->Decrypt($crypted);

        // $encryptedText = $blowfish->encrypt(
        //     $plainText,
        //     $encPassword, # encryption key
        //     $encType, # Encryption Mode
        //     $paddingType, # Padding Style
        //     // $encVector  # Initialisation Vector - required for CBC
        // );

        // $decryptedText = $blowfish->decrypt(
        //     $encryptedText,
        //     $encPassword, # encryption key
        //     $encType, # Encryption Mode
        //     $paddingType, # Padding Style
        //     // $encVector  # Initialisation Vector - required for CBC
        // );

        $data = [
            'plain' => $plainText,
            'encrypt' => $crypted,
            'decrypt' => $decrypted
        ];

        return view('test', compact('data'));
    }

    public function index()
    {
        return "Index Page";
    }

    public function generateUser()
    {
        $faker = Faker::create('id_ID');

        
        for ($i = 0; $i < 5; $i++) {
            $jeniskelamin               = ['L', 'P'];
            $detail                     = new Detail;
            $login                      = new Login;
            $saveDetail = $detail->create([
                'detail_nama'           => $faker->name,
                'detail_telepon'        => $faker->phoneNumber,
                'detail_alamat'         => $faker->address,
                'detail_jeniskelamin'   => Randoms::random($jeniskelamin),
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $saveDetail->save();
            

            $username               = Str::random(5);
            $password               = Hash::make($username, [
                                            'rounds' => 12,
                                        ]);
            $email                  = strtolower($username);
            $email                 .= '@website.com';
            $level                  = ['guest', 'user'];
            $status                 = ['verified', 'unverified'];

            $token = Str::random(16);
            $saveLogin = $login->create([
                'login_username'    => $username,
                'login_password'    => $password,
                'login_email'       => $email,
                'login_token'       => $token,
                'login_level'       => Randoms::random($level),
                'login_status'      => Randoms::random($status),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);
            $saveLogin->detail()->associate($saveDetail->id);
            $saveLogin->save();
        }
        return redirect()->route('home-index')->with('generate_success', 'Generate Data Berhasil');
    }

    public function postLogin()
    {
        //
    }

    public function postRegister()
    {
        //
    }

    public function logout(Request $request)
    {
        // $request->session()->flush();
    }
}
