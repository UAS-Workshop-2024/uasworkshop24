<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = (object)[
            'first_name' => 'Aisha',
            'last_name' => 'Laily',
            'email' => 'aishapurwanto248@gmail.com',
            'phone' => '0898432743',
            'profile_image' => 'https://via.placeholder.com/150',
        ];

        return view('user.frontend.profile_user', compact('user'));
    }
}
