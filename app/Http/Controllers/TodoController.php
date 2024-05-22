<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function show()
    {
        return view('todo', ['todos' => Todo::all()]);

//        return response()->json(Todo::all());
    }

    public function showid($id)
    {
        return response()->json(Todo::get($id));
    }

    public function delete($id)
    {
        Todo::destroy($id);
        return redirect('/');
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->text = $request['text'];
        $todo->save();
        return redirect('/');
    }

}
