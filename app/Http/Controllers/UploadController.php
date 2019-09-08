<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{
    public function index(Request $request)
    {
        $files = $request->file('file');

        foreach ($files as $file)
        {
            $file->store('uploads', 'public');
        }

        /*
        $files = $_FILES['file']['name'];

        foreach ($_FILES['file']['name'] as $name)
        {
            Storage::put($name, 'dddddd');
        }
        */

    }


}
