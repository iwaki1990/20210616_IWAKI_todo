<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('todos')->get();
        return view('index', ['items' => $items]);
    }
}
