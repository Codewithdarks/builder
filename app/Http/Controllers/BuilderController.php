<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuilderController extends Controller
{
    public function EditorFunction() {
        return view('.editor');
    }
}
