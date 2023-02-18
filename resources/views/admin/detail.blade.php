@extends('layouts.app')
@section('content')
  <div class="container">
    <a href="/admin/berita" class="btn btn-warning m-3 w-25">kembali</a>
    @foreach ($datas as $data)
    {{-- BERITA --}}
    <div class="card mb-5 p-3 shadow">
      <h1 class="card-title fw-bold border-bottom border-warning border-5">{{$data->title}}</h1>
      <div class="d-flex justify-content-end gap-3 text-muted ">

        <p class="m-0 pb-2">Berita dari <span class="text-warning fw-bold text-decoration-underline">{{$data->user->name}}</span></p>
        <p class="m-0 pb-2">| &nbsp;{{$data->created_at}} <span></span></p>
        <p class="m-0 pb-2">| &nbsp;{{$data->category->nama}} <span></span></p>
      </div>
      <img style="object-fit: cover" src="{{asset('storage/'.$data->img)}}" height="550px" class="card-img-top shadow mb-3" alt="...">
      <div class="card-body">
        
        <p class="card-text">{{$data->konten}}</p>
      </div>
    </div>
    {{-- END BERITA --}}
    
    {{-- KOMENTAR --}}
    <div class="mb-5">
      <h1 class="border-bottom border-warning border-5 w-50 mb-4">Tanggapan Pengguna Lain</h1>
        {{-- KOMENTAR --}}
        @forelse ($data->comment as $comment)
          <div class="card my-3 shadow p-3">
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center justify-content-start gap-2" >
                <h5 class="">{{$comment->nama}}</h5>
                <span class="mb-1">{{$comment->created_at->diffforhumans()}}</span>
              </div>
              <a  onclick="return confirm('hapus tanggapan?')" href="/delete/comment/{{$comment->id}}" class="fw-bold btn btn-sm btn-danger">
                <i class="fa fa-trash text-light"> </i> Hapus Tanggapan 
              </a>
            </div>
            <div class="comment-text-sm mb-2">
              <span>{{$comment->konten}}</span>
            </div>
            <div class="reply-section">
              @if(count($comment->reply) >= 1)
              <a class="m-3 text-decoration-none text-warning badge bg-dark p-2 bg-opacity-75 fw-bolder" onclick="$('#reply-{{$comment->id}}').collapse('toggle')" role="button">
                <i class="fa-solid fa-angle-down "></i> tampilkan balasan
              </a>
              @endif
            </div>
          </div>
            <div class="collapse mb-3" id="collapseExample-{{$comment->id}}">
              <div class="card card-body bg-secondary bg-opacity-25">
                <form action="/reply" method="post">
                  <div class="d-flex gap-2 my-2">
                    @csrf
                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                    {{-- <input type="hidden" name="post_id" value=""> --}}
                    <input type="text" name="nama" class="form-control w-25" required placeholder="Masukan Nama">
                    <input type="text" name="konten" class="form-control w-75 " required placeholder="Berikan Balasan">
                    {{-- <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample-{{$comment->id}}" aria-expanded="false" aria-controls="collapseExample">cancel</button> --}}
                    <button class="btn btn-warning" type="submit">Balas</button>
                  </div>
                </form>
              </div>
            </div>

          {{-- collapse REPLY --}}
            <div class="collapse w-75 ml-auto " id="reply-{{$comment->id}}">
              @foreach ($comment->reply as $reply)
              <div class="card card-body mb-2 bg-secondary bg-opacity-25">
                <div class="d-flex justify-content-between p-0">
                  <div class="d-flex align-items-center justify-content-start gap-2">
                    <h5 class="mr-2 ">{{$reply->nama}}</h5>
                    <span class="mb-1 ml-2">{{$reply->created_at->diffforhumans()}}</span>
                  </div>
                  <a onclick="return confirm('hapus reply?')" href="/delete/reply/{{$reply->id}}" class="fw-bold btn btn-sm btn-danger">
                    <i class="fa fa-trash text-light"> </i> Hapus Reply 
                  </a>
                </div>
                <div class="comment-text-sm">
                  <span>{{$reply->konten}}</span>
                </div>
              </div>
              @endforeach
            </div>
          
        @empty
        <p class="text-center shadow p-3 fw-semibold">ooooppps komentar kosong, jadilah yang pertama mengomentari</p>
        @endforelse
      
        </div>
    </div>
    {{-- END KOMENTAR --}}
    @endforeach
  </div>
 @endsection