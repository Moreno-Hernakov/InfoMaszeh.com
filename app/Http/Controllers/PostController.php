<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Models\comment;
use App\Models\Category;
use App\Models\post;

class PostController extends Controller
{
    // ---- user ---- //
    public function index(){
        $datas = post::with('category')->latest()->paginate('3');
        // return $datas;
        return view('post.home', compact('datas'));
    }

    public function detail($id){
        // $comment = comment::with('User')->get();
        // return post::where('id', $id)->with('comment', 'comment.reply', 'User', 'category.post')->get();
        return view('post.detail', [
            'datas' => post::where('id', $id)->with('comment', 'comment.reply', 'User', 'category.post')->get()
        ]);
    }

    // --- admin --- //
    public function adminIndex(){
        return view('admin.admin', [
            'datas' => post::with('user')->paginate('10')
        ]);
    }

    public function adminDetail($id){
        return view('admin.detail', [
            'datas' => post::where('id', $id)->with('comment', 'comment.reply', 'User', 'category.post')->get()
        ]);
    }

    public function adminCreate(){
        return view('admin.upload', [
            'category' => category::all()
        ]);
    }

    public function adminStore(Request $request){
        $data = $request->validate([
            'konten' => 'min:1',
            'title' => 'required',
            'category_id' => 'required'
        ]);

        // return $data;
        // $data['img'] = \Storage::disk('s3')->put("latihan1/".$request->file("img")->getClientOriginalName(), $request->file("img"));
        // \Storage::disk('s3')->setVisibility("latihan1"."/".$request->file("img")->getClientOriginalName(),"public");
        $data['img'] =  $request->file("img")->store('post-images', 'public');
        $data['user_id'] = auth()->user()->id;

        post::create($data);
        return redirect('/admin/berita');
    }

    public function adminEdit($id){
        return view('admin.edit', [
            'post' => post::find($id)
        ]);
    }

    public function adminUpdate($id){
        $data = [
            'title' => request()->title,
            'konten' => request()->konten
        ];

        if(request()->has('img')){
            $data['img'] = request()->img;
        }

        post::where('id', $id)->update($data);
        return redirect('admin/berita');
    }

    public function adminDestroy($id){
        post::destroy($id);
        return redirect()->back();
    }

    public function detailCreate(){
        $data = post::where('id', $id)->get();
        return $data;
    }
}
