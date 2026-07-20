<?php

namespace App\Http\Controllers;

use App\Models\Book;

class HelloController extends Controller
{
    public function list()
    {
        $data = [
            'books' => Book::all(),
        ];
        return view('hello.list', $data);
    }

    public function conf()
    {
        return config('myapp.API_KEY') . '/' . config('myapp.DEBUG');
    }
}
