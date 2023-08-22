@extends('layouts.app', ['title' => 'Users'])

@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
        </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" disabled class="form-control" id="firstName" placeholder="First Name" name="first_name" value="{{ $user->first_name }}">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" disabled class="form-control" id="lastName" placeholder="Last Name" name="last_name" value="{{ $user->last_name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" disabled class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{ $user->email }}">
                </div>
            </div>

    </div>


@endsection
