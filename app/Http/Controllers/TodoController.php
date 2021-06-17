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
        if ($request->hasCookie('txt')) {
            $txt = 'Cookie:' . $request->cookie('txt');
        } else {
            $txt = 'クッキーはありません';
        }
        return view('todo.index', ['txt' => $txt]);
    }
    public function post(Request $request)
    {
        $rules = [
            'txt' => 'required'
        ];
        $this->validate($request, $rules);
        $txt = $request->txt;
        $response = response()->view('todo.index', ['txt' => $txt . 'をクッキーに保存しました']);
        $response->cookie('txt', $txt, 100);
        return $response;
        
    }

    public function create(Request $request)
    {
        
        $text = $request->content;
        
        $request->validate([
            'content' => 'required|max:20',
        ]);

        $todo = new Todo;
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $text = $request->content;
        
        $request->validate([
            'content' => 'required|max:20',
        ]);

        $todo = Todo::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
          return redirect('/');
          
      }


    public function delete(Request $request)
    {
        $todo = Todo::find($request->id);
        return view('delete',['form'=>$todo]);
    }
    

}

