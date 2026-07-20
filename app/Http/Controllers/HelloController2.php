<?php

namespace App\Http\Controllers;

class HelloController2 extends Controller
{
    public function view()
    {
        $data = [
            'message' => 'こんにちは、世界！',
        ];
        return view('hello.show', $data);
    }
}
