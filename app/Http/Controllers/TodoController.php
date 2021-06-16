<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use CreateTodosTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('todos')->get();
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $this->validate($request,Todo::$rules);
        $person = new Todo;
        $form = $request->all();
        unset($form['_token_']);
        $person->fill($form)->save();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate($request,Todo::$rules);
        $person = Todo::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $person->fill($form)->save();
          return redirect('/');
      }


    public function delete(Request $request)
    {
        $person = Todo::find($request->id);
        return view('delete',['form'=>$person]);
    }

}

