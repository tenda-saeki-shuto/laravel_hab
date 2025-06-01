<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; // ユーザーモデルをインポート

class UserController extends Controller
{
    public function index()
    {
        // ユーザーデータを取得
        $users = Users::all();

        // ビューにデータを渡す
        return view('users.index', compact('users'));
    }


    public function store(Request $request)
    {
        $user_info = $request->validate([
            'user_name' => ['required', 'unique:users'],
            'password' => ['required']
        ]);

        // ユーザーモデルをインスタンス化し、ユーザー情報を保存
        $user = new Users();
        $user->store_user($user_info);

        return redirect('login');
    }
}
