<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function diskusi()
    {
        $forums = Forum::all();
        return view('forum.diskusi', compact('forums'));
    }

    public function showDiskusi($id)
    {
        $forum = Forum::with('comments', 'userPenulis')->findOrFail($id);
        return view('forum.detail_forum', compact('forum'));
    }

    public function storeComment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'comment' => 'required|string',
        ]);

     
        $data = [
            'name' => $request->name,
            'comment' => $request->comment,
            'post_id' => $request->get('forum_id'),
            'user_id' => $request->get('user_id'),
            'created_at' => now(),
        ];

        Comment::insert($data);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }
}
