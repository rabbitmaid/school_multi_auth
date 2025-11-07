<?php
namespace App\Services;

use Illuminate\Http\Request;

final class RoleRedirectService
{
    public static function redirectUser(Request $request, string $query = '')
    {
        if ($request->user()->hasRole('admin')) {
            return redirect()->intended(route('admin.dashboard', absolute: false)). $query;
        } elseif ($request->user()->hasRole('lecturer')) {
            return redirect()->intended(route('lecturer.dashboard', absolute: false)). $query;
        } elseif ($request->user()->hasRole('student')) {
            return redirect()->intended(route('student.dashboard', absolute: false)). $query;
        } else {
            return redirect()->route('home');
        }
    }
}
