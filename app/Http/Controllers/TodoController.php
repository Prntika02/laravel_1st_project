<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function alltodos(){
      $todos = Todo::orderBy('is_complete','ASC') ->paginate(15);
  
       return view('Todos',compact('todos'));
    }

  function storetodo(Request $request){
   
   //VALIDATION COMPLETE*****************

      $request->validate([
         'title'=> 'required',
         'detail'=> 'required|max:500',
      ]
      // ,[
      //   'title.required' => 'Enter title',
      //   'title.max'=> 'R koto?',
      //   'detail.required' => 'Enter title',
      //   'author.required' => 'Enter title',

      //   ]
      );
      // STORING DATA

   //   $todo = Todo::create($request->all());
$todo = new Todo();
$todo->title = $request->title;
$todo->detail = $request->detail;
$todo->author = $request->author;
$todo->save();

return back();
    }
function editTodo($id){
   $todo = Todo::findorFail($id);
   return view('TodoEdit',compact('todo'));
}


function updateTodo(Request $request, $id){
   $todo = Todo::findorFail($id);
$todo->title = $request->title;
$todo->detail = $request->detail;
$todo->author = $request->author;
$todo->save();
if($todo){
   notify()->success('You post has been updated successfully');
   return to_route('todo.all');

}

}
function updateStatus($id){
   $todo = Todo::findorFail($id);
   $todo->is_complete = true;
   $todo->save();
   notify()->success("You ($todo->title) todo has been marker  as complete");

return back();
}


function deleteTodo($id){
   $todo = Todo::findorFail($id)->delete();
   if($todo){
      notify()->success('You post has been updated successfully');
      return back();
   
   }
}
}
