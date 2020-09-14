<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // ログインユーザーを取得
        $user = Auth::user();
        return view('home');
        // フォルダがあればそのフォルダのタスク一覧
        // return redirect()->route('tasks.index', [
        //     'folder' => $folder->id,
        // ]);
    }
}
