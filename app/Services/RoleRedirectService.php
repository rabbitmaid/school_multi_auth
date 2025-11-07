<?php

namespace App\Services;

use Illuminate\Http\Request;

final class RoleRedirectService
{
    public static function redirectUser(Request $request, array $parameters = [])
    {
        if ($request->user()->hasRole('admin')) {
            return redirect()->intended(route('admin.dashboard', $parameters, absolute: false));
        } elseif ($request->user()->hasRole('lecturer')) {
            return redirect()->intended(route('lecturer.dashboard', $parameters, absolute: false));
        } elseif ($request->user()->hasRole('student')) {
            return redirect()->intended(route('student.dashboard', $parameters, absolute: false));
        } else {
            return redirect()->route('home');
        }
    }
}
