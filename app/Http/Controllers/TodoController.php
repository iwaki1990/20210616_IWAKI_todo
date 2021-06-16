<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from todos');
        return view('index', ['items' => $items]);
    }
}
