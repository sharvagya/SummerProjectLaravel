<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    public function attempt(Request $request)
{
    $credentials = $request->only('username', 'password');
    $username = $credentials['username'];
    $password = $credentials['password'];

    if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])) {
        // Authentication passed...
        return redirect()->intended('dashboard');
    }
    return redirect()->back()->withInput()->withErrors(['username' => 'Invalid username or password']);
}

}
