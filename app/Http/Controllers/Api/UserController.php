<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $paginate = request('paginate', 5);
        $search_term = request('q', '');
        $users = User::with(['userDetail'])
            ->search(trim($search_term))
            ->paginate($paginate);

        return UserResource::collection($users);
    }
}
