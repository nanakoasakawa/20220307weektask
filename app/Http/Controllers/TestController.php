<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['txt' => '']);
    }
    public function post(Request $request)
    {
        //バリデーション
        $validate_rule = [
            'name' => 'required',
            'email' => 'required|email',
        ];
        $this->validate($request, $validate_rule);
        return view('thanks');
    }
}