@extends('layouts.app', ['title' => 'Users'])

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $task->title }}</h3>
        </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" disabled class="form-control" id="title" placeholder="First Name" name="title" value="{{ $task->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" disabled class="form-control" id="description" name="description">{{ $task->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" disabled class="form-control" id="status" placeholder="Status" name="status" value="{{ $task->status }}">
                </div>
            </div>

    </div>


@endsection
