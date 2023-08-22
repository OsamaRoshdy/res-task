@extends('layouts.app', ['title' => 'Users'])
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">All Users</h3>
            <a href="{{ route('users.create') }}" class="btn btn-primary pull-right">Add New User</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><img class="direct-chat-img" src="{{ $user->image_path }}"></td>
                        <td>
                            <div class="btn-group">
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit', $user->id) }}">Edit</a>
                                    <a class="btn btn-sm btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
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
