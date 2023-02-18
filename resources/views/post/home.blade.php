@extends('layouts.app')
@section('content')
<div class="py-3 mb-4 bg-warning bg-opacity-25 d-flex justify-content-evenly align-items-center" >
    <div>

        <h1 class="fw-bold">Selamat Datang di InfoMaszeh.<span class="text-warning">com</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Itaque est ad inventore totam delectus asperiores velit culpa optio magni facilis!</p>
    </div>
    <img class="rounded" src="{{asset('storage/post-images/FNdIyXU5ruUZbGHihBkkyET5dNT6eV45NNG6gth7.png')}}" alt="" width="400" height="200">
</div>
<div class="container mb-4" >
    <h1 class="fw-bold border-bottom border-warning border-5 w-25 mb-3">Berita Terbaru</h1>
    {{-- <a href="/add" class="btn btn-warning mb-3"><i class="fa fa-plus"></i> Tambah Berita</a> --}}
    <div class="row justify-content-evenly mb-4" >
        @forelse ($datas as $data)
        <div class="card col-md-3 p-0 overflow-hidden my-3" >
            <img src="{{asset('storage/'.$data->img)}}" alt="{{asset('postImages-'.$data->img)}}" style="object-fit: cover; height: 250px; width: 100%">
            {{-- <div class="rounded-2" style="background-position:center; background-repeat: no-repeat; background-size: cover; background-image: url('storage/{{$data->img}}'); width: a; height: 400px;"></div> --}}
            {{-- <img src="storage/{{$data->img}}" class="card mt-3" alt="{{$data->img}}"> --}}
            <div class="card-body">
            <h3 class="card-title">{{Str::limit($data->title, 42)}}</h3>
            <p class="card-text">{{ Str::limit($data->konten, 120) }}</p>
            <a href="detail/{{ $data->id}}" class="btn btn-warning btn-sm">Baca Selengkapnya...</a>
        </div>
    </div>
        @empty
        <h3 class="text-center fw-bold my-5 border-bottom border-warning border-5 w-75">Oooops, Berita Belum Tersedia. Tunggu beberapa saat lagi</h3>
        @endforelse
        
        <div class="m-3">

            {{ $datas->links() }}
        </div>
</div>


@endsection