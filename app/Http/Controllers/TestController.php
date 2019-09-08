<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TestController extends Controller
{
    public function index()
    {
        $filename = '1234.jpeg';
        $url = asset('storage/uploads/' . $filename);

        $files = Storage::allFiles('/storage/app/public/uploads');

        //$url = asset('app/public/uploads/1234.jpeg');

       return view('show', ['url' => $url]);
    }
}