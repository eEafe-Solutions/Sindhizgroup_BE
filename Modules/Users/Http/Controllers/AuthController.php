<?php

namespace Modules\Users\Http\Controllers;



use Illuminate\Routing\Controller;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Auth;
use Modules\Users\Http\Requests\UserSignInRequest;
use Modules\Users\Http\Resources\UserResource;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api'])->except([
            'login',
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


    /**
     * Show user profile.
     *
     * @return UserResource
     */

    public function profile()
    {
        return new UserResource(auth('api')->user());
    }


    public function logout()
    {
        $user = Auth::user()->token();
        $user->revoke();
        return response([
            'data' => 'logged out',
        ]);
    }
}
