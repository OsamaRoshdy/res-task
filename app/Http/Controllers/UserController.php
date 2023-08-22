<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Traits\ImageUploaderTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ImageUploaderTrait;

    public function index()
    {
        $users = User::select(['id', 'first_name', 'last_name', 'email', 'image'])->get();
        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->storeImage($request->file('image'), 'users');
        $user = User::create($data);
        return redirect()->route('users.show', $user);
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $this->updateImage($request->file('image'), $user->image, 'users');
        }
        $user->update($data);
        return redirect()->route('users.show', $user);
    }

    public function destroy(User $user)
    {
        $this->deleteImage($user->image, 'users');
        $user->delete();
        return redirect()->route('users.index');
    }
}

