<?php

namespace App\Http\Controllers;

use App\Enums\RolesEnum;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('user.list', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create', [
            'roles' => RolesEnum::cases()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $validated = $request->validated();
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make("Tamrsoisdfiosjf"),
        ]);
        $validated['role'] = array_filter($validated['role'], function($item) {
            return $item !== RolesEnum::SUPER_ADMIN->value;
        });

        $user->assignRole($validated['role']);

        event(new Registered($user));

        return redirect(route('user.index'))->with('status', __("User Created Successfully. Password Reset link sent to user."));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('user.edit', [
            'user' => User::find($id),
            'roles' => RolesEnum::cases()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        $user = User::find($id);
        $validated = $request->validated();
        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $validated['role'] = array_filter($validated['role'], function($item) {
            return $item !== RolesEnum::SUPER_ADMIN->value;
        });
        $user->syncRoles($validated['role']);

        $user->update();

        return redirect(route('user.index'))->with('status', __("User Updated Successfully."));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('user.index'))->with('status', __("User Deleted Successfully."));
    }
}
