<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


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
        $request->validate([
            'first_name' => 'required|string|min:2|max:50',
            'middle_name' => 'nullable|string|min:2|max:50',
            'last_name' => 'required|string|min:2|max:50',
            'contact_number' => 'required|string|min:10|max:15',
            'email' => 'required|email|ends_with:@iskolarngbayan.pup.edu.ph',
            'password' => 'required|string|min:8|max:50',
        ], [
            'first_name.required' => 'Unang Pangalan ay Kelangan.',
            'last_name.required' => 'Huling Pangalan ay Kelangan.',
            'contact_number.required' => 'Numero ng Kontak ay Kelangan.',
            'email.required' => 'Email ay Kelangan.',
            'password.required' => 'Password ay Kelangan.',
            'email.email' => 'Email ay dapat valid.',
            'email.ends_with' => 'Email ay dapat nagtatapos sa @iskolarngbayan.pup.edu.ph.',
        ]);

        Log::INFO("Recieved First Name: " . $request->first_name);
        Log::INFO("Recieved Middle Name: " . $request->middle_name);
        Log::INFO("Recieved Last Name: " . $request->last_name);
        Log::INFO("Recieved Contact Number: " . $request->contact_number);
        Log::INFO("Recieved Email: " . $request->email);
        Log::INFO("Recieved Password: " . $request->password);

        DB::table('users')->insert([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'password' => hash('sha256', $request->password),
        ]);

        return redirect()->route('register')->with('success', 'Registration successful!');
    }

    public function login(Request $request)
    {
        $raw_pw = $request->input('password');
        $hash_pw = hash('sha256', $raw_pw);
        $email = $request->input('email');

        Log::INFO("Recieved Email: " . $email);
        Log::INFO("Recieved Password: " . $request->input('password'));
        Log::INFO("Hashed Password: " . $hash_pw);

        $users = DB::table('users')
            ->select('*')
            ->where('email', '=', $email, 'and')
            ->where('password', '=', $hash_pw)
            ->get();

        Log::INFO("Users: " . $users);

        if ($users->count() > 0) {
            return view('login')->with('success', 'Logged in as: ' . $users[0]->first_name . ' ' . $users[0]->last_name . ' logged in successfully!');
        } else {
            return view('login')->with('error', 'Invalid credentials!');
        }
    }
}
