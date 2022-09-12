<?php

namespace Modules\Users\Http\Controllers;



use Illuminate\Routing\Controller;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Auth;
use Modules\Users\Http\Requests\UserSignInRequest;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api-system-user'])->except([
            'login',
            'profile',
        ]);
    }
    /**
     * @param UserSignInRequest $request
     * @return ResponseFactory|Response
     * @throws ValidationException
     */
    public function login(UserSignInRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            throw ValidationException::withMessages([
                'login' => 'Invalid Credentials',
            ]);
        }

        return response([
            'data' => auth()->user(),
            'token' => auth()
                ->user()
                ->createToken('api-system-user')->accessToken,
        ]);
    }
}
