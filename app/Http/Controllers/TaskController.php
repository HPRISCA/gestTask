<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    
    public function index()
        {
           
            $tasks = Task::where('user_id', Auth::id())->get();
    
            return view('tasks.index', compact('tasks'));
        } 
    
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        Auth::user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'pending',
        ]);
    
        return redirect()->route('tasks.index')->with('success', 'Tâche ajoutée avec succès.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id); 
        return view('tasks.edit', compact('task'));
    }
  
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);
        $task = Task::findOrFail($id); 
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Tâche mise à jour.');
    }

    public function complete($id)
    {
    $task = Task::findOrFail($id);
    $task->status = 'completed'; 
    $task->save(); 

    return redirect()->route('tasks.index')->with('success', 'Tâche complétée avec succès.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id); 
        $task->delete(); 
        return redirect()->route('tasks.index')->with('success', 'Tâche supprimée.');
    }
}
