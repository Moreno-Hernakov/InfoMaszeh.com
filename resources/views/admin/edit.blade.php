@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="shadow-lg  mb-5 card rounded mt-5">
            <div class="card-header p-3">
                <h3 class="fw-bold m-0">Tambah Berita</h3>
            </div>
            <div class="card-body p-3">
                <form action="/update/{{$post->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                        <input value="{{$post->title}}" name="title" type="text" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Berita</label>
                        <input name="img" class="form-control mb-2" type="file" id="formFile">
                        <img src="/storage/{{$post->img}}" style="object-fit: cover: height: 180px; width:180px;" class="" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Konten Berita</label>
                        <textarea name="konten" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$post->konten}}</textarea>
                    </div>
                    
                
            </div>
            <div class="card-footer p-3">
                <a href="/admin/berita" class="btn btn-danger ">cancel</a>
                <button type="submit" class="btn btn-primary">submittt</button>
                </form>
            </div>
        </div>
    </div>
@endsection