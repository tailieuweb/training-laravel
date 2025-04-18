<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class RoleController extends Controller
{
    public function role(Request $request) {
        $role_id = $request->get('id');
        $role = Role::find($role_id);

       $data = [
           'role' => $role,
           'users' => $role->users
       ];

        return view('role.view', $data);
    }
}
