<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\reply;

class CommentController extends Controller
{
    public function index(){
        return comment::get();
    }
    public function store(Request $request){
        $data = $request->validate([
            'konten' => 'required'
        ]);

        $data['post_id'] = $request->post('post_id');
        $data['user_id'] = auth()->user()->id;

        comment::create($data);

        // return $data;
        return redirect()->back();
    }

    public function reply(Request $request){
        $data = $request->validate([
            'konten' => 'required'
        ]);

        $data['comment_id'] = $request->comment_id;
        $data['user_id'] = auth()->user()->id;

        reply::create($data);

        return redirect()->back();
    }
}
