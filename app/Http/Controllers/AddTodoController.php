<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class AddTodoController extends Controller
{
    public function index() {
        return view('addTodo');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'text' => ['required', 'min: 1'],
            'description' => ['required', 'max: 2000'],
            'date' => ['required']
        ]);

        $data= new Todo;
        $data->todo= $request->input('text');
        $data->description= $request->input('description');
        $data->duration= $request->input('date');

        $data->save();

        return redirect('/home')->with('success', 'Todo Created!');
    }

    public function edit($id) {

        $todo= Todo::find($id);
        return view('edit')->with('todo', $todo);
    }

    public function update(Request $request, $id) {
        $data= Todo::find($id);


        $this->validate($request, [
            'text' => ['required', 'min: 1'],
            'description' => ['required', 'max: 2000'],
            'date' => ['required']
        ]);

        $data->todo= $request->input('text');
        $data->description= $request->input('description');
        $data->duration= $request->input('date');
        $data->update();

        return redirect('/home')->with('success', 'Todo Updated!');
    }

    public function destroy($id) {
        $todo= Todo::find($id);
        $todo->delete();

        return redirect('/home')->with('success', 'Todo Deleted!');
    }
}
