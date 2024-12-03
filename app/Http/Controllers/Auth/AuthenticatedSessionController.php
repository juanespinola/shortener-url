<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', ['locale' => app()->getLocale()], absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login(Request $request) : JsonResponse {
        try {
            $input = $request->all();
            $validator = Validator::make($input, [
                'email' => ['required','email'],
                'password' => ['required'],
            ]);

            if($validator->fails()){
                return response()->json(["messages" => $validator->errors()], 400);
            }

            if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
                $user = Auth::user();
                $token = $user->createToken('default-token')->plainTextToken;
                $response = [
                    'user' => $user,
                    'token' => $token,
                ];

                return response()->json($response, 200);
            } else {
                return response()->json(['message' => ' E-mail o Contraseña no correcta'], 400);
            }

        } catch (\Throwable $th) {
            return response()->json($th, 400);
        }
    }



}
