<?php

namespace Modules\Users\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Auth;
use Modules\Users\Entities\User;
use Modules\Users\Http\Requests\UserRegisterRequest;
use Modules\Users\Http\Requests\UserSignInRequest;
use Illuminate\Validation\ValidationException;
use Modules\Users\Http\Resources\UserResource;

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
     * @param UserRegisterRequest $request
     * @return ResponseFactory|Response
     */

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
}
