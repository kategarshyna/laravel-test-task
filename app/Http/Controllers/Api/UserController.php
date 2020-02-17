<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Mail\UserDeleted;
use App\User;

class UserController extends Controller
{
    public function destroy(User $user)
    {
        $user->delete();
        $this->dispatch(new SendEmail($user->email, new UserDeleted($user->name)));

        return response(null, 204);
    }
}
