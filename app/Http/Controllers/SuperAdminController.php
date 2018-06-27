<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:SuperAdmin');
    }

    public function index()
    {
        return view('superadmin.home');
    }

    //CUSTOM ROUTES

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assignRoles()
    {
        $users = User::all();
        $roles = Role::all();

        return view('roles.assign', compact('users', 'roles'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateRoles(Request $request)
    {
        $roleId = $request->input('role');

        $user = User::findOrFail($request->input('user'));
        $user->roles()->sync([$roleId]);

        return redirect()->route('roles.index')
            ->with('success', __('Rola przypisana poprawnie!'));
    }

    public function deleteRoles($id)
    {
        $user = User::findOrFail($id);
        $user->roles()->detach();


        return redirect()->route('roles.index')
            ->with('success', __('Uprawnienia użytkownika usunięte pomyślnie!'));
    }

}
