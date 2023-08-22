@extends('layouts.app', ['title' => 'Tasks'])

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create Task</h3>
        </div>

        <form role="form" action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $task->title }}">
                    @error('title')
                    <span style="color: red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
                    @error('description')
                    <span style="color: red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        @foreach($statuses as $status)
                            <option value="{{ $status }}" @if($status == $task->status) selected @endif>{{ $status }}</option>
                        @endforeach
                    </select>
                    @error('status')
                    <span style="color: red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>


@endsection
