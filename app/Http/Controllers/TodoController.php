<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Carbon\Carbon;
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

       // $todo = new Todo;
        //$form = $request->all();
       // unset($form['_token_']);
        //$todo->fill($form)->save();
        $now = Carbon::now();
        $todo = new Todo;
        $todo->content = $request->content;
        $todo->created_at = $now;
        $todo->updated_at = $now;
        $todo->save();
        return redirect('/');
    }


    public function add(Request $request)
    {
        return view('add');
    }

    public function find(Request $request)
    {
        return view('find', ['input' => '']);
    }


    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Todo::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }


  
   
    public function edit($id)
    {
        $todo = Todo::find($id);
        
        return view('todos.edit', [
            'todo' => $todo,
        ]);
    }
  
    


    public function update(Request $request)
    {
        $text = $request->content;
        $request->$id
        ([
            'content' => 'required|max:20',
            
        ]);

        $now = Carbon::now();
        $todo = Todo::find($request->$id);
        $todo->content = $request->content;
        $todo->updated_at = $now;
        $todo->save();
       //$form = $request->all();
       // unset($form['_token_']);
        //$todo->fill($form)->save();
          return redirect('/');
          
      }



    public function delete(Request $request)
    {
        $todo = Todo::find($request->id);
        return view('delete',['form'=>$todo]);
    }
    

 

    public function remove(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
    
    
}