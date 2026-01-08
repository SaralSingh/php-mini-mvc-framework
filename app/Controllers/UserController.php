<?php

namespace App\Controllers;

use App\Models\User;
use App\Services\Response;

class UserController
{

    public function user()
    {
        $id = 16;
        $user = User::find($id);
        if ($user) {
            print_r($user);
        } else echo "not found";
    }

    public function users()
    {
        $users = User::all();

        if (empty($users)) {
            return Response::json(
                [
                    'status' => true,
                    'message' => 'no record is found!',
                    'data' => []
                ]
            );
        }

        return Response::json(
            [
                'status' => true,
                'message' => 'all data fetched successfully',
                'data' => $users
            ]
        );
    }
}
