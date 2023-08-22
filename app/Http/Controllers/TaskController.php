<?php

namespace App\Http\Controllers;

use App\Enums\TaskStatusEnum;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::select(['id', 'title', 'status'])->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $statuses = TaskStatusEnum::toArray();
        return view('tasks.create', compact('statuses'));
    }

    public function store(TaskRequest $request)
    {
        $task = Task::create($request->validated());
        return redirect()->route('tasks.show', $task->id);
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $statuses = TaskStatusEnum::toArray();
        return view('tasks.edit', compact('task', 'statuses'));
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return redirect()->route('tasks.show', $task->id);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
