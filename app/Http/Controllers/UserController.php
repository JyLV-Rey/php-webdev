<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    public function index()
    {
        return "Delete User";
    }

    public function userInputParam($id, $name)
    {
        return "User id: "
            . $id
            . ", Name: "
            . $name;
    }

    public function userEditParam($id, $name)
    {
        return "<a href='" . route('userDisplay', [$id, $name]) . "'>
            Edit User
        </a>";
    }

    public function register(Request $request)
    {
        Log::INFO("Recieved First Name: " . $request->first_name);
        Log::INFO("Recieved Middle Name: " . $request->middle_name);
        Log::INFO("Recieved Last Name: " . $request->last_name);
        Log::INFO("Recieved Contact Number: " . $request->contact_number);
        Log::INFO("Recieved Email: " . $request->email);
        Log::INFO("Recieved Password: " . $request->password);
    }
}
