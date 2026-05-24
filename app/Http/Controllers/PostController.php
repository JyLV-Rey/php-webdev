<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table('post')
            ->leftJoin('status', 'post.status', '=', 'status.id')
            ->leftJoin('users', 'post.created_by', '=', 'users.id')
            ->select('post.*', 'status.display_name as status_display_name', 'status.name as status_name', 'users.first_name as created_by_name')
            ->get();

        foreach($posts as $post) {
            Log::info("RETRIEVED id: ".$post->id);
            Log::info("RETRIEVED title: ".$post->title);
            Log::info("RETRIEVED description: ".$post->description);
            Log::info("RETRIEVED status: ".$post->status);
            Log::info("RETRIEVED created_at: ".$post->created_at);
            Log::info("RETRIEVED created_by: ".$post->created_by);
        }

        $status = DB::table('status')->select('*')->get();
        $users = DB::table('users')->select('*')->get();

        return view('post.index', compact('posts', 'status', 'users'));
    }

    public function store(Request $request) {
        DB::table('post')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'created_at' => now(),
            'created_by' => 1
        ]);

        Log::info("Post Title: ".$request->title);
        Log::info("Post Description: ".$request->description);

        return redirect()->route('post.index');
    }

    public function editForm($id) {
        $post = DB::table('post')->where('id', '=', $id)->first();
        $status = DB::table('status')->get();


        return view('post.edit', compact('post', 'status'));
    }

    public function update(Request $request, $id) {
        Log::info("UPDATE CALLED - id: ".$id.", title: ".$request->title.", status: ".$request->status);

        $affected = DB::table('post')
            ->where('id', '=', $id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status,
                'updated_at' => now()->toDateString(),
            ]);

        Log::info("Updated Post id: ".$id." - rows affected: ".$affected." - Title: ".$request->title);

        return redirect()->route('post.index');
    }
}

