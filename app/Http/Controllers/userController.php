<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $data=[
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::firstwhere('level_id', 1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::find(1);
        // $user = UserModel::all();
        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager'
        //     ],
        // );
        $user = UserModel::firstOrCreate(
            [
                'username' => 'manager34',
                'nama' => 'Manager Tiga Empat',
                'password' => Hash::make('1234'),
                'level_id' => 2
            ],
        );
        $user->save();
        return view('user', ['data'=>$user]);
    }
}