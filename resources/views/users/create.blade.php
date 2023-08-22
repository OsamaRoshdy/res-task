@extends('layouts.app', ['title' => 'Users'])

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create User</h3>
        </div>

        <form role="form" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" name="first_name">
                    @error('first_name')
                    <span style="color: red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="last_name">
                    @error('last_name')
                    <span style="color: red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                    @error('email')
                    <span style="color: red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    @error('password')
                    <span style="color: red" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" id="exampleInputFile" name="image">
                    @error('image')
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
