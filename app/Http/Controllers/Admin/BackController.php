<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Login;
use Faker\Factory as Faker;

class BackController extends Controller
{
    public function index()
    {
        return "Index Page";
    }

    public function generateUser()
    {
        // $faker = Faker::create('id_ID');

        // for ($i = 0; $i < 5; $i++) {
        //     $detail = new Detail;

        //     $saveDetail = $detail->create([
        //         'detail_nama' => $faker->name,
        //         'detail_nama' => $faker->name,
        //         'detail_nama' => $faker->name,
        //         'detail_nama' => $faker->name,
        //     ]);
        // }
    }
}
