<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    // Fetches data from the database
    public function index() {
        $posts = DB::table('post')->select('*')->get();
        Log::info("All Posts: ".$posts);

        return view('post')->with('posts', $posts);
    }

    public function store(Request $request) {
        DB::table('post')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'created_by' => 1
        ]);

        Log::info("Post Title: ".$request->title);
        Log::info("Post Description: ".$request->description);
        return redirect('post');
    }
}

