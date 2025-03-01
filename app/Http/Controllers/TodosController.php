<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = Todos::all();
        return view('todos.index', compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'nullable',
        ]);

        Todos::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('todos.index')->with('success', '作成しました');
    }

    /**
     * Display the specified resource.
     */
    // public function show(todos $todo)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todos $todo)
    {
        return view('todos.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todos $todo)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'nullable',
        ]);

        $todo->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('todos.index')->with('success', '更新しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todos $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', '削除しました');
    }
}
