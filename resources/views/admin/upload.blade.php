@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="shadow-lg  mb-5 card rounded mt-5">
            <div class="card-header p-3">
                <h3 class="fw-bold m-0">Tambah Berita</h3>
            </div>
            <div class="card-body p-3">
                <form action="/add" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category_id" class="form-select" aria-label="Default select example">
                             <option selected>Open this select category</option>
                             @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                             @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Berita</label>
                        <input name="img" class="form-control" type="file" id="formFile" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Konten Berita</label>
                        <textarea name="konten" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
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