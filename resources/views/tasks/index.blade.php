@extends('layouts.app', ['title' => 'Tasks'])
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Tasks</h3>
            <a href="{{ route('tasks.create') }}" class="btn btn-primary pull-right">Add New Task</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tasks as $key => $task)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->status }}</td>
                        <td>
                            <div class="btn-group">
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-success" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                                    <a class="btn btn-sm btn-info" href="{{ route('tasks.show', $task->id) }}">Show</a>
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection
