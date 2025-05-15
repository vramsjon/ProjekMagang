<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * register
     *
     * @param  mixed $request
     * @return void
     */
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();


        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Register Success!',
            'data'    => $user
        ]);
    }
}
