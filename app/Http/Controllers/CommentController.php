<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    public function index(Request $request){
        return comment::get();
    }
    public function store(Request $request){
        $data = $request->validate([
            'konten' => 'required'
        ]);

        $data['post_id'] = $request->post('post_id');
        $data['user_id'] = auth()->user()->id;

        comment::create($data);

        return redirect()->back();
        // return $data;
    }
}
