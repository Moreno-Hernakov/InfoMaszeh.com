<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\reply;

class CommentController extends Controller
{
    public function store(Request $request){
        // return $request;
        $data = $request->validate([
            'konten' => 'required'
        ]);

        $data['post_id'] = $request->post('post_id');
        $data['nama'] = $request->post('nama');

        comment::create($data);

        // return $data;
        return redirect()->back();
    }

    public function reply(Request $request){
        $data = $request->validate([
            'konten' => 'required'
        ]);

        $data['comment_id'] = $request->comment_id;
        $data['nama'] = $request->nama;

        reply::create($data);

        return redirect()->back();
    }

    public function replyDestroy($id){
        // return $id;
        reply::destroy($id);
        return redirect()->back();
    }

    public function commentDestroy($id){
        comment::destroy($id);
        return redirect()->back();
    }
}
